<?php

use App\Mail\PurchaseDocumentMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Dompdf\Dompdf;

function uploadImage($request, $object, $type)
{
    # code...
    if ($request->hasFile($type)) {
        $file = $request->$type;
        $newName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('images', $newName);
        $object->$type = "images/$newName";
    }
}

function sendEmail($email, $name, $title, $description)
{
    $receiver = $email;
    $dompdf = new Dompdf();
    $dompdf->loadHTML(
        "
       <h1>$title</h1>
       $description
       "
    );
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $data = [
        "name" => $name,
        "description" => "Dear $name, Thank you for purchasing from Sayari",
        "book" => $dompdf->output()
    ];

    Mail::to($receiver)->send(new PurchaseDocumentMail($data));
}
