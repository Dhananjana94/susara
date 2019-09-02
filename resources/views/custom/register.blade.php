<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Registration</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     
    <link rel="stylesheet" type="text/css" href="css/registrationFrom.css">
</head>

<body>

<div class="container register-form">
    
            <div class="form">
                <div class="note">
                    <p>User Registration</p>
                </div>
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">
                            {{$error}}
                        </p>
                    @endforeach
                @endif
            <form class="form-horizontal " action="{{route('custom.register')}}" method="post">
                @csrf
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-8">

                        <!-- <div class="form-group">
                                <input type="text" class="form-control" name="customerId" placeholder="CustomerId *" value="{{old('customerId')}}" />
                            </div> -->

                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name *" value="{{old('fname')}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="last Name *" value="{{old('lname')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Address *" value="{{old('email')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="phoneNo" placeholder="Mobile No*" value="{{old('phoneNo')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="nic" placeholder="NIC No*" value="{{old('NIC No')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="no" placeholder="Home NO*" value="{{old('no')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="street" placeholder="street*" value="{{old('street')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="city*" value="{{old('city')}}" />
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="password_confirmation"/>
                            </div>

                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    <button type="submit" class=" btn btn-primary btn-block">Register</button>
                
                </div>
                </form>
            </div>
        </div>
    

</div>   
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>