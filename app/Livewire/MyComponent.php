<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
class MyComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $show=0,$search;
}
