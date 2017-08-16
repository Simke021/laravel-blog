@extends('main')

@section('title', '| Contact')
    
@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" class="form-control" placeholder="example@email.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" id="subject" class="form-control" rows="5">Type your message here...</textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Send Message">
                </form>
            </div>
        </div><!-- End of row -->
@endsection