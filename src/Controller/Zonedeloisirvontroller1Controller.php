<?php

namespace App\Controller;

use App\Entity\ZoneDeLoisir;
use App\Form\ZoneDeLoisirType;
use App\Repository\ZoneDeLoisirRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/zonedeloisirvontroller1")
 */
class Zonedeloisirvontroller1Controller extends AbstractController
{
    /**
     * @Route("/", name="zonedeloisirvontroller1_index", methods={"GET"})
     */
    public function index(ZoneDeLoisirRepository $zoneDeLoisirRepository): Response
    {
        return $this->render('zonedeloisirvontroller1/index.html.twig', [
            'zone_de_loisirs' => $zoneDeLoisirRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="zonedeloisirvontroller1_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $zoneDeLoisir = new ZoneDeLoisir();
        $form = $this->createForm(ZoneDeLoisirType::class, $zoneDeLoisir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zoneDeLoisir);
            $entityManager->flush();

            return $this->redirectToRoute('zonedeloisirvontroller1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zonedeloisirvontroller1/new.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zonedeloisirvontroller1_show", methods={"GET"})
     */
    public function show(ZoneDeLoisir $zoneDeLoisir): Response
    {
        return $this->render('zonedeloisirvontroller1/show.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="zonedeloisirvontroller1_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ZoneDeLoisir $zoneDeLoisir): Response
    {
        $form = $this->createForm(ZoneDeLoisirType::class, $zoneDeLoisir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zonedeloisirvontroller1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zonedeloisirvontroller1/edit.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zonedeloisirvontroller1_delete", methods={"POST"})
     */
    public function delete(Request $request, ZoneDeLoisir $zoneDeLoisir): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zoneDeLoisir->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zoneDeLoisir);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zonedeloisirvontroller1_index', [], Response::HTTP_SEE_OTHER);
    }
   /**
 * @Route("/route")
 */
    public function index1(ZoneDeLoisirRepository $zoneDeLoisirRepository): Response
    {
        return $this->render('zonedeloisirvontroller1/index.html.twig', [
            'zone_de_loisirs' => $zoneDeLoisirRepository->findAll(),
        ]);
    }
}
