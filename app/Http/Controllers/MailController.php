<?php
namespace App\Http\Controllers;

use App\Jobs\AttachmentMailJob;
use App\Mail\WelcomeMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {

        $to      = "daudtaiyab786@gmail.com";
        $msg     = "Dummy text";
        $subject = "First Mail";
        Mail::to($to)->send(new WelcomeMail($msg, $subject));
        // Mail::to($to)->cc($to)->bcc($to)->send(new WelcomeMail($msg, $subject));
        return "Mail Sent";
    }

    public function attachmentEmail(Request $request)
    {
        $msg      = $request->message;
        $subject  = $request->subject;
        $realName = $request->file('file')->getClientOriginalName();
        $filename = time() . uniqid('', true) . "." . $request->file('file')->getClientOriginalExtension();
        $request->file('file')->move('uploads', $filename);

        $contact          = new Contact();
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->phone   = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->name    = 'uploads/' . $filename;
        $contact->save();

        $data = [
            "name"    => $request->name,
            "email"   => $request->email,
            "phone"   => $request->phone,
            "subject" => $request->subject,
            "message" => $request->message,
            "file"    => 'uploads/' . $filename,
        ];
        // dd($data);
        AttachmentMailJob::dispatch($data);
        return redirect()->route('contact')->with('success', 'Email sent successfully');
        // Mail::to($request->email)->send(new AttachmentMail($data));
    }
}
