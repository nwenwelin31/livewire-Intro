<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public $comments;
    public $newComment;
    public function mount()
    {
        $initialComments = Comment::all()->toArray();
        $this->comments = $initialComments;
    }
    public function addComment()
    {
        if($this->newComment == '')
        {
            return;
        }
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'John Doe hello',
            ]);

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
