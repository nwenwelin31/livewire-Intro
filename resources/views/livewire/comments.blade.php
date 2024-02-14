<div>
    <form class="my-4 flex" wire:submit.prevent="addComment">
        <div class="col-md-5 mt-2">
            <input type="text" class="form-control mb-3" placeholder="Write a comment" name="name" wire:model="newComment">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
    @foreach ($comments as $comment)
        <div class="col-md-5 rounded border shadow p-3 my-2">
            <div class="flex justify-start my-2">
                <label class="font-bolder text-lg">{{ $comment['creator'] }}</label>
                <small class="mx-3 py-1 text-xs text-secondary font-semibold">{{ $comment['created_at'] }}</small>
            </div>
            <p class="text-gray-800">{{ $comment['body'] }}</p>
        </div>
    @endforeach

</div>
