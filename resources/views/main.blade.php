@extends('plantilla')
@section('content')

							<!-- Banner -->
                            <section id="banner">
									<div class="content">
										<header>
											<h1>Escuela de Taekwondo<br />
											Choson-Sul</h1>
											<p>Escuela de taekwondo de alto rendimiento</p>
										</header>
										<p>"Cada dia es una oportunidad para sorprenderte a ti mismo".</p>
                                        En la actualidad el Tae Kwon Do, es un deporte con aproximadamente 6 millones de practicantes en todo el mundo, es una de las dos artes marciales reconocidas por el Comité Olímpico Internacional y con participación en los juegos Olí­mpicos desde 1988 como deporte de exhibición y desde el año 2000 como deporte oficial
										<ul class="actions">
											<li><a href="{{route('Historia')}}" class="button big ">Aprende mas</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/Choson.jfif" alt="" />
									</span>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Beneficios del taekwondo</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon"><img src="images\puno.png" alt=""></span>
											<div class="content">
												<h3>Flexibilidad</h3>
												<p>Aumenta la flexibilidad.</p>
											</div>
										</article>
										<article>
                                        <span class="icon"><img src="images\oscuro.png" alt=""></span>
											<div class="content">
												<h3>Condicion fisica</h3>
												<p>Mejora la resistencia y la fuerza muscular.</p>
											</div>
										</article>
										<article>
                                        <span class="icon"><img src="images\oscuro.png" alt=""></span>
											<div class="content">
												<h3>Coordinacion</h3>
												<p>Aporta el control de un alto nivel de movimientos básicos que permitirán en el futuro realizar una forma óptima el trabajo técnico deportivo.</p>
											</div>
										</article>
										<article>
                                        <span class="icon"><img src="images\puno.png" alt=""></span>
											<div class="content">
												<h3>Auto confianza</h3>
												<p>Aumenta la seguridad en si mismos porque los practicantes del Taekwondo se dan cuenta de la capacidad de dominar su cuerpo en el entorno, también aumentado su autoestima.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Conoce mas de este bello arte marcial!</h2>
									</header>
									<div class="posts">
										<article>
											<a href="{{route('Historia')}}" class="image"><img src="images/Historia.jpg" alt="" /></a>
											<h3>Historia del taekwondo</h3>
											<p>conoce los bellos origines de este arte marcial milenario</p>
											<ul class="actions">
												<li><a href="{{route('Historia')}}" class="button">Aprende mas</a></li>
											</ul>
										</article>
										<article>
											<a href="{{route('Cintas')}}" class="image"><img src="images/cintasj.jfif" alt="" /></a>
											<h3>Cintas y niveles</h3>
											<p>Conoce los colores de la cintas y su significado</p>
											<ul class="actions">
												<li><a href="{{route('Cintas')}}" class="button">Aprende mas</a></li>
											</ul>
										</article>
										<article>
											<a href="{{route('Reglas')}}" class="image"><img src="images/Combat.jpg" alt="" /></a>
											<h3>Reglas de combate</h3>
											<p>Si te interesa combatir, este articulo es para ti</p>
											<ul class="actions">
												<li><a href="{{route('Reglas')}}" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="{{route('Patadas')}}" class="image"><img src="images/Kick.jpeg" alt="" /></a>
											<h3>Patadas</h3>
											<p>Las patadas utilizadas en el taekwondo te dejaran boquiabierto :0</p>
											<ul class="actions">
												<li><a href="{{route('Patadas')}}" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section>

						</div>
					</div>


@endsection
