<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleInventory;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Models\Company;

class ArticleInventoryController extends Controller
{
    public function index()
    {
        $articleInventories = ArticleInventory::with('article', 'inventory')->get();
        return view('article-inventories.index', compact('articleInventories'));
    }

    public function create()
    {
        $articles = Article::all();
        $inventories = Inventory::all();
        $companies = Company::all();
        return view('article-inventories.create', compact('articles' , 'inventories','companies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'inventory_id' => 'required|exists:inventories,id',
            'quantity' => 'required|integer',
        ]);

        $articleInventory = new ArticleInventory();
        $articleInventory->article_id = $request->input('article_id');
        $articleInventory->inventory_id = $request->input('inventory_id');
        $articleInventory->company_id = $request->input('company_id');
        $articleInventory->quantity = $request->input('quantity');
        $articleInventory->save();

        return redirect()->route('inventories.index')->with('success', 'Article inventory created successfully.');
    }

    public function edit(ArticleInventory $articleInventory)
    {
        return view('article-inventories.edit', compact('articleInventory'));
    }

    public function update(Request $request, ArticleInventory $articleInventory)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'inventory_id' => 'required|exists:inventories,id',
            'quantity' => 'required|integer',
        ]);

        $articleInventory->article_id = $request->input('article_id');
        $articleInventory->inventory_id = $request->input('inventory_id');
        $articleInventory->company_id = $request->input('company_id');
        $articleInventory->quantity = $request->input('quantity');
        $articleInventory->save();

        return redirect()->route('article-inventories.index')->with('success', 'Article inventory updated successfully.');
    }

    public function destroy(ArticleInventory $articleInventory)
    {
        $articleInventory->delete();
        return redirect()->route('article-inventories.index')->with('success', 'Article inventory deleted successfully.');
    }
}
