<?php
/**
 * Created by PhpStorm.
 * User: Zoki
 * Date: 11/10/2016
 * Time: 1:23 AM
 */

namespace App\Http\Controllers;


class ContactMessageController extends Controller
{
    public function getContactIndex() {
        return view('frontend.other.contact');
    }
}