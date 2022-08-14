<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecipeController extends AbstractController
{
    /**
     * This controller display all recipes
     *
     * @param RecipeRepository $repository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    #[Route('/recette', name: 'recipe.index', methods: ['GET'])]
    public function index(RecipeRepository $repository, Request $request, PaginatorInterface $paginator ): Response
    {
        $recipes = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10
        );
        return $this->render('pages/recipe/index.html.twig', compact('recipes')); 
    }

     /**
     * This controller allow us to create a recipe
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/recette/nouveau', name: 'recipe.new', methods: ['GET', 'POST'] )]
    public function new(
        Request $request,
        EntityManagerInterface $manager
        ) : Response
    {
        
        $recipe = new Recipe();
        $form = $this->createForm(RecipeType::class, $recipe);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $recipe = $form->getData();

            $manager->persist($recipe);
            $manager->flush();
            $this->addFlash(
                'success',
                'Votre recette a été créé avec succès !'
            );

            return $this->redirectToRoute('recipe.index');
        }
        
        return $this->render('pages/recipe/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * This controller allow us to modify a recipe
     *
     * @param Recipe $recipe
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/recette/edition/{id}', name: 'recipe.edit', methods: ['GET', 'POST'] )]
    public function edit(Recipe $recipe, Request $request, EntityManagerInterface $manager) :Response 
    // public function edit(RecipetRepository $repository, int $id) :Response
    { 
        //$recipe = $repository->findOneBy(["id" => $id]);
        $form = $this->createForm(RecipeType::class, $recipe);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $recipe = $form->getData();

            $manager->persist($recipe);
            $manager->flush();
            $this->addFlash(
                'success',
                'Votre recette a été modifiée avec succès !'
            );

            return $this->redirectToRoute('recipe.index');
        }

        return $this->render('pages/recipe/edit.html.twig', [
            'form' => $form->createView()
        ]);  
    }

    /**
     * This controller allow us to delete a recipe
     * 
     * @param Recipe $recipe
     * @param EntityManagerInterface $manager
     * @return Reponse
     */
    #[Route('recette/suppression/{id}', name: 'recipe.delete', methods: ['GET'])]
    public function delete(Recipe $recipe, EntityManagerInterface $manager) :Response
    {
        $manager->remove($recipe);
        $manager->flush();
        $this->addFlash(
            'success',
            'Votre recette a été supprimé avec succès !'
        );
        return $this->redirectToRoute('recipe.index');
    }  
}