<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Services\ToDoList\Contracts\DeleteTaskServiceContract;
use Illuminate\Support\Facades\Log;

class DeleteTaskController extends Controller
{
     /**
     * Contruct function to put files on board
     */
    public function __construct(protected DeleteTaskServiceContract $service) {
    }

    /**
     * Summary of __invoke
     * 
     * @param int $id
     * 
     * @return RedirectResponse
     */
    public function __invoke(int $id): RedirectResponse
    {
        try{

            $this->service->delete($id);

        }catch(\Exception $e){

            Log::critical('Unexpected error in '.self::class, [
                'exception' => $e,
                'code' => 'delete_unexpected_error',
                'service' => 'DeleteTaskController',
            ]);
        }

        return redirect(route('to_do_list.list'));
    }
}
