@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
<div class="container">
<div class="section">
    <form  class="contact-form" name="contact" method="post" data-netlify="true">
        <div class="row">
            <input class="contact-input mr-1" placeholder="Name" type="text" name="name" id="name" required>
            <input class="contact-input" placeholder="Email" type="email" name="email" id="email" required>
        </div>
				<div class="row">
					 <input class="contact-input" placeholder="Business Name" type="text" name="business" id="business" required>
			</div>
				<div class="row">
				 <input class="contact-input" placeholder="Website URL" type="text" name="website" id="website">
			</div>
        <div class="row">
            <textarea class="contact-textarea" name="message" id="message" placeholder="Message" required></textarea>
        </div>

        <input name="subject" style="display: none;" value="Blog Contact Page">

        <input contact type="hidden" name="after" value="{{ $page->production ? $page->baseUrl : 'http://localhost:3000' }}/contact/sent">

        <input type="text" name="trapit" value="" style="display: none;">

        <input type="hidden" name="replyto" value="%email">

        <input class="contact-form-btn" type="submit" value="Send">
    </form>
    </div>
</div>

@endsection
