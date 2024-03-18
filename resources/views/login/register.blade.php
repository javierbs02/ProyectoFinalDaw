<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link href="assets/login/login.css" rel="stylesheet">
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
                            <p class="text-white-50 mb-5">Introduce usuario y contraseña</p>

                            <form method="post" action="{{route('login.crearUsuario')}}">
                                @csrf
                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeEmailX" class="form-control form-control-lg" name="user"
                                        placeholder="Usuario" />
                                    @error('user')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeEmailX" class="form-control form-control-lg" name="email"
                                        placeholder="Email" />
                                    @error('email')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                        name="password" placeholder="Contraseña" />
                                    @error('password')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Crear cuenta</button>
                            </form>


                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                            <p class="mb-0">¿Ya tienes cuenta? <a href="{{ route('login.login') }}"
                                    class="text-white-50 fw-bold">Inicia sesión</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>