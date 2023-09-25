<body class="no-scroll-y">

	<!-- Preloader -->
	<section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
					<div class="spinner"></div>
					<div class="txt-loading">
						<span data-text-preloader="L" class="letters-loading">
							L
						</span>

						<span data-text-preloader="O" class="letters-loading">
							O
						</span>

						<span data-text-preloader="A" class="letters-loading">
							A
						</span>

						<span data-text-preloader="D" class="letters-loading">
							D
						</span>

						<span data-text-preloader="I" class="letters-loading">
							I
						</span>

						<span data-text-preloader="N" class="letters-loading">
							N
						</span>

						<span data-text-preloader="G" class="letters-loading">
							G
						</span>
					</div>
				</div>
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>

</body>




<style>


/* Preloader */
.ctn-preloader {
	align-items: center;
  cursor: none;
	display: flex;
  height: 100%;
  justify-content: center;
	position: fixed;
	left: 0;
  top: 0;
	width: 100%;
  z-index: 900;
}

.ctn-preloader .animation-preloader {
	position: absolute;
  z-index: 100;
}

/* Spinner cargando */
.ctn-preloader .animation-preloader .spinner {
  animation: spinner 1s infinite linear;
	border-radius: 50%;
  border: 3px solid rgba(0, 0, 0, 0.2);
  border-top-color: #000000; /* No se identa por orden alfabetico para que no lo sobre-escriba */
  height: 9em;
  margin: 0 auto 3.5em auto;
  width: 9em;
}

/* Texto cargando */
.ctn-preloader .animation-preloader .txt-loading {
  font: bold 5em 'Montserrat', sans-serif;
	text-align: center;
	user-select: none;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
  animation: letters-loading 4s infinite;
  color: #000000;
  content: attr(data-text-preloader);
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  transform: rotateY(-90deg);
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading {
	color: rgba(0, 0, 0, 0.2);
	position: relative;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
  animation-delay: 0.2s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
  animation-delay: 0.4s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
  animation-delay: 0.6s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
  animation-delay: 0.8s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
  animation-delay: 1s;
}

.ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
  animation-delay: 1.2s;
}

.ctn-preloader .loader-section {
  background-color: #ffffff;
  height: 100%;
	position: fixed;
  top: 0;
  width: calc(50% + 1px);
}

.ctn-preloader .loader-section.section-left {
  left: 0;
}

.ctn-preloader .loader-section.section-right {
  right: 0;
}

/* Efecto de fade en la animación de cargando */
.loaded .animation-preloader {
  opacity: 0;
  transition: 0.3s ease-out;
}

/* Efecto de cortina */
.loaded .loader-section.section-left {
  transform: translateX(-101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}

.loaded .loader-section.section-right {
  transform: translateX(101%);
  transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
}

/* Animación del preloader */
@keyframes spinner {
	to {
		transform: rotateZ(360deg);
	}
}

/* Animación de las letras cargando del preloader */
@keyframes letters-loading {
  0%,
  75%,
  100% {
  	opacity: 0;
    transform: rotateY(-90deg);
  }

  25%,
  50% {
    opacity: 1;
    transform: rotateY(0deg);
  }
}

/* Tamaño de portatil hacia atras (portatil, tablet, celular) */
@media screen and (max-width: 767px) {
	/* Preloader */
	/* Spinner cargando */
	.ctn-preloader .animation-preloader .spinner {
		height: 8em;
		width: 8em;
	}

	/* Texto cargando */
	.ctn-preloader .animation-preloader .txt-loading {
	  font: bold 3.5em 'Montserrat', sans-serif;
	}
}

@media screen and (max-width: 500px) {
	/* Prelaoder */
	/* Spinner cargando */
	.ctn-preloader .animation-preloader .spinner {
		height: 7em;
		width: 7em;
	}

	/* Texto cargando */
	.ctn-preloader .animation-preloader .txt-loading {
	  font: bold 2em 'Montserrat', sans-serif;
	}
}
</style>


<script>
    $(document).ready(function() {

  setTimeout(function() {
    $('#ctn-preloader').addClass('loaded');
    // Una vez haya terminado el preloader aparezca el scroll
    $('body').removeClass('no-scroll-y');

    if ($('#ctn-preloader').hasClass('loaded')) {
      // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
      $('#preloader').delay(1000).queue(function() {
        $(this).remove();
      });
    }
  }, 3000);

});
</script>
