<?php

namespace App\Controller;

use App\Entity\ZoneDeLoisir;
use App\Form\ZoneDeLoisir1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ObjectManager;
/**
 * @Route("/zonedeloisir")
 */
class ZoneDeLoisirController extends AbstractController
{
    /**
     * @Route("/", name="zone_de_loisir_index", methods={"GET"})
     */
    public function index(): Response
    {
        $zoneDeLoisirs = $this->getDoctrine()
            ->getRepository(ZoneDeLoisir::class)
            ->findAll();
            

        return $this->render('zone_de_loisir/index.html.twig', [
            'zone_de_loisirs' => $zoneDeLoisirs,
        ]);
    }

    /**
     * @Route("/new", name="zone_de_loisir_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
    
        $zoneDeLoisir = new ZoneDeLoisir();
        $form = $this->createForm(ZoneDeLoisir1Type::class, $zoneDeLoisir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zoneDeLoisir);
            $entityManager->flush();

            return $this->redirectToRoute('zone_de_loisir_index', [], Response::HTTP_SEE_OTHER);
        }

     
        
    return $this->render('zone_de_loisir/new.html.twig', [
        'zone_de_loisir' => $zoneDeLoisir,
        'form' => $form->createView(),
    ]);
    }
    

    /**
     * @Route("/{id}", name="zone_de_loisir_show", methods={"GET"})
     */
    public function show(ZoneDeLoisir $zoneDeLoisir): Response
    {
        return $this->render('zone_de_loisir/show.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="zone_de_loisir_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ZoneDeLoisir $zoneDeLoisir): Response
    {
        $form = $this->createForm(ZoneDeLoisir1Type::class, $zoneDeLoisir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zone_de_loisir_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zone_de_loisir/edit.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zone_de_loisir_delete", methods={"POST"})
     */
    public function delete(Request $request, ZoneDeLoisir $zoneDeLoisir): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zoneDeLoisir->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zoneDeLoisir);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zone_de_loisir_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
