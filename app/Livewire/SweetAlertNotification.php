<?php

namespace App\Livewire;

use Livewire\Component;

class SweetAlertNotification extends Component
{
    protected $listeners = ['remove'];

    public function render()
    {
        return view('livewire.sweet-alert-notification');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Created Successfully!',
            'text' => 'It will list on the user\'s table soon.',
        ]);
    }

    public function alertError()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Error!',
            'text' => 'Error Occured. Please try again later.',
        ]);
    }

    public function alertInfo()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'info',
            'message' => 'Information',
            'text' => 'This is an informative message.',
        ]);
    }

    public function alertDelete($itemId)
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'warning',
            'title' => 'Delete Item',
            'text' => 'Are you sure you want to delete this item?',
            'confirmButtonText' => 'Yes, delete it!',
            'itemId' => $itemId,
        ]);
    }

    public function alertSave()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved Successfully!',
            'text' => 'Your changes have been saved.',
        ]);
    }

    // Add other alert methods (e.g., alertConfirm, remove) as needed
}
