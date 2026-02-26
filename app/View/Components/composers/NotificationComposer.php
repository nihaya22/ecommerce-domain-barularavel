<?php

namespace App\View\Composers;

use App\Models\Inquiry;
use Illuminate\View\View;

class NotificationComposer
{
    public function compose(View $view): void
    {
        $unreadInquiries = Inquiry::unread()->latest()->take(5)->get();
        $unreadCount     = Inquiry::unread()->count();

        $view->with(compact('unreadInquiries', 'unreadCount'));
    }
}