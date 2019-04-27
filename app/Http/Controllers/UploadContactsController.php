<?php
 
namespace App\Http\Controllers\Backend;
 
use App\Http\Request\Backend\Contacts\UploadContactsRequest;
use App\Http\Controllers\Controller;
use App\Jobs\UploadContacts;
use App\FileUpload;
use App\Models\Group;
use Session;
class UploadContactsController extends Controller
{
    /**
     * Upload the contacts file
     *
     * @param  App\Http\Requests\Backend\Contacts\UploadContactsRequest $request
     * @param  App\Models\Group $group
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UploadContactsRequest $request, Group $group)
    {
        if ($request->file('filename')->isValid()) {
 
            $fileUpload = new FileUpload;
            $fileUpload->user_id = auth()->user()->id;
            $fileUpload->group_id = $group->id;
            $fileUpload->filename = $request->file('filename')->hashName();
            $fileUpload->extension = $request->file('filename')->extension();
            $fileUpload->filesize = $request->file('filename')->getClientSize();
            $fileUpload->location = $request->file('filename')->store('contact-files');
            $fileUpload->save();
            toastr()->success('Data has been saved successfully!');
 
            flash()->success('Your file is currently being processed. You will be notified when done.');
 
            //UploadContacts::dispatch($fileUpload, $group)->onQueue('file-uploads');
            dispatch(new UploadContacts($fileUpload, $group))->onQueue('file-uploads');
        } else {
            flash()->error('There was a problem uploading your file. Please try again.');
        }
 
        return back();
    }
}