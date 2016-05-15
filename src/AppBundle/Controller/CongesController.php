<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CongesController extends Controller
{
    /**
     * @Route("/conges", name="conges")
     */
    public function indexAction()
    {
        return $this->render('conges/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/conges/artt", name="artt")
     */
    public function arttAction()
    {
        $arttRepo = $this->getDoctrine()->getRepository('AppBundle:Artt');
        $moisAnneeCourante = $arttRepo->findByAnnee(2016);

        $mois = [];
        foreach ($moisAnneeCourante as $m){
            $sommeJours = $arttRepo->getSommeJoursMoisCourant($m->getMois(), $m->getAnnee());

            $mois[] = [
                'nom' => $m->getLibelleMois(),
                'annee' => $m->getAnnee(),
                'exceptionnel' => [
                    'aquis' => $m->getExceptionnelAquis(),
                    'pris' => $m->getExceptionnelPris(),
                    'restant' => $sommeJours['sommeExceptionnelAquis'] - $sommeJours['sommeExceptionnelPris']
                ],
                'conges' => [
                    'aquis' => $m->getCongesAquis(),
                    'pris' => $m->getCongesPris(),
                    'restant' => $sommeJours['sommeCongesAquis'] - $sommeJours['sommeCongesPris']
                ],
                'artt' => [
                    'aquis' => $m->getArttAquis(),
                    'pris' => $m->getArttPris(),
                    'restant' => $sommeJours['sommeArttAquis'] - $sommeJours['sommeArttPris']
                ]
            ];
        }

        return $this->render('conges/artt.html.twig', array('mois' => $mois));
    }
}
