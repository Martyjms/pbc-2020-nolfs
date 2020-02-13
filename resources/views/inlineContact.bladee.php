

 @if(session()->has('message'))
 <div class="alert alert-success" role="alert">
     <strong>Success</strong> {{ session()->get('message') }}
 </div>
@endif


 {{-- ||  Two Column Section || Contact Form --}}

   <div class="container padding" id="StayPut">
    <div class="row padding">
      {{-- <div class=" col-lg-4">
        <h2 class="text-center">-Contact Form-</h2>
        <h1 class="text-center">Email</h1>
        <div>


             <form action="/contact" method="POST">
               <div class="form-group">
                   <label for="name">Name</label>
                   <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                   <div>{{ $errors->first('name') }}</div>
               </div>
               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                   <div>{{ $errors->first('email') }}</div>
               </div>
               <div class="form-group">
                   <label for="message">Message</label>
                   <textarea name="message" id="" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                   <div>{{ $errors->first('message') }}</div>
               </div>
               @csrf
            <button type="submit" class="btn btn-primary">Send Message</button>
           </form>
        </div> --}}

        <a href="#" class="btn btn-primary">Register</a>
      </div>
      <div class="col-lg-4">
        <h2 class="text-center">-Contact Info-</h2>
        <h1 class="text-center">Address</h1>
           </div>
        <div class="embed-responsive embed-responsive-4by3 col-lg-4 ">
          <iframe class="embed-responsive-item"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22596.90655380639!2d-110.00642829884292!3d53.4647567102539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x530835951b749c43%3A0x3c86f614d4de0613!2sPleasantview%20Bible%20Camp!5e0!3m2!1sen!2sca!4v1574086720105!5m2!1sen!2sca" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
  </div>



