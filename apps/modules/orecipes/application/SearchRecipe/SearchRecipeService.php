<?php

namespace Orecipes\Application\SearchRecipe;

use Orecipes\Domain\Repository\RecipeRepository;

class SearchRecipeService
{
    private $recipeRepository;

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    public function handle(SearchRecipeRequest $request)
    {
        $key = $request->getKey();
        $result = $this->recipeRepository->searchByKey($key);

        if($result){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Resep dengan kata kunci " . $key . " ditemukan!",
                "hasil" => $result
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Resep tidak ditemukan!"
            ];
        }

        return $response;
    }
}