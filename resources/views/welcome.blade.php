<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AppTropodo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">

                    <svg height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 512.001 512.001" xml:space="preserve">
<g>
    <path style="fill:#565164;" d="M387.184,124.822c12.533,12.531,23.284,26.853,31.831,42.545
		c10.825-2.54,21.103-8.026,29.546-16.467c14.721-14.722,20.469-35.016,17.246-54.087c-2.066-12.22-7.819-23.938-17.246-33.368
		c-9.431-9.432-21.15-15.18-33.368-17.246c-19.072-3.222-39.368,2.526-54.087,17.246c-8.443,8.441-13.931,18.716-16.47,29.543
		C360.328,101.536,374.65,112.282,387.184,124.822z"/>
    <g>
        <path style="fill:#DD2645;" d="M124.823,387.179l262.361-262.357c-12.534-12.54-26.856-23.285-42.548-31.834
			c-26.334-14.354-56.534-22.505-88.635-22.505c-33.797,0-65.481,9.037-92.775,24.829c-28.152,16.289-51.626,39.762-67.914,67.914
			c-15.792,27.291-24.829,58.978-24.829,92.775C70.489,307.227,91.254,353.605,124.823,387.179z"/>
        <path style="fill:#DD2645;" d="M387.184,124.822L124.823,387.179c33.571,33.57,79.95,54.334,131.179,54.336
			c33.797,0,65.485-9.037,92.775-24.829c28.152-16.287,51.627-39.762,67.919-67.914c15.787-27.289,24.824-58.978,24.824-92.775
			c0-32.1-8.151-62.298-22.504-88.632C410.468,151.674,399.718,137.352,387.184,124.822z"/>
    </g>
    <g>
        <path style="fill:#565164;" d="M239.546,71.204c0.317,1.804,0.486,3.66,0.486,5.554c0,17.705-14.355,32.058-32.06,32.058
			c-13.857,0-25.666-8.799-30.139-21.112C196.873,78.849,217.663,73.126,239.546,71.204z"/>
        <path style="fill:#565164;" d="M176.98,273.155c17.658,0,32.058-14.402,32.058-32.057c0-17.658-14.4-32.057-32.058-32.057
			c-17.658,0-32.057,14.399-32.057,32.057C144.923,258.753,159.324,273.155,176.98,273.155z"/>
        <path style="fill:#565164;" d="M328.464,215.6c17.658,0,32.057-14.402,32.057-32.058c0-17.658-14.4-32.059-32.057-32.059
			c-17.659,0-32.057,14.402-32.057,32.059C296.407,201.198,310.805,215.6,328.464,215.6z"/>
        <path style="fill:#565164;" d="M337.435,376.559c17.659,0,32.057-14.4,32.057-32.057c0-17.656-14.399-32.06-32.057-32.06
			c-17.658,0-32.057,14.404-32.057,32.06C305.378,362.159,319.777,376.559,337.435,376.559z"/>
        <path style="fill:#565164;" d="M161.076,383.365c17.705,0,32.058,14.353,32.058,32.057c0,5.012-1.15,9.756-3.202,13.981
			c-20.218-7.707-38.748-18.855-54.864-32.724C140.889,388.615,150.373,383.365,161.076,383.365z"/>
    </g>
</g>
                        <g>
                            <path style="fill:#000003;" d="M114.646,236.21c0.774,0.168,1.546,0.249,2.306,0.249c4.954,0,9.413-3.439,10.513-8.477
		c5.38-24.673,17.662-47.151,35.517-65.003c4.206-4.205,4.207-11.024,0.001-15.231c-4.202-4.206-11.023-4.207-15.231-0.002
		c-20.779,20.775-35.072,46.934-41.333,75.647C105.152,229.205,108.836,234.943,114.646,236.21z"/>
                            <path style="fill:#000003;" d="M397.351,275.788c-5.807-1.27-11.551,2.417-12.816,8.229
		c-13.076,59.994-67.131,103.537-128.533,103.537c-5.947,0-10.77,4.822-10.77,10.77c0,5.947,4.823,10.77,10.77,10.77
		c34.815,0,68.921-12.028,96.036-33.869c27.114-21.84,46.129-52.603,53.543-86.622C406.847,282.793,403.163,277.055,397.351,275.788
		z"/>
                            <path style="fill:#000003;" d="M113.679,244.526c-5.947,0-10.77,4.822-10.77,10.77v0.704c0,5.948,4.823,10.77,10.77,10.77
		s10.77-4.822,10.77-10.77v-0.704C124.449,249.348,119.627,244.526,113.679,244.526z"/>
                            <path style="fill:#000003;" d="M398.325,245.23c-5.947,0-10.77,4.822-10.77,10.77v0.704c0,5.948,4.823,10.77,10.77,10.77
		c5.948,0,10.77-4.822,10.77-10.77v-0.704C409.095,250.052,404.272,245.23,398.325,245.23z"/>
                            <path style="fill:#000003;" d="M501.23,245.23h-49.241c-1.383-25.458-7.646-49.636-17.856-71.624
		c8.168-3.604,15.646-8.7,22.039-15.092c13.619-13.619,21.152-31.693,21.258-50.933h23.8c5.947,0,10.77-4.823,10.77-10.77
		c0-5.949-4.823-10.77-10.77-10.77h-26.897c-3.417-11.29-9.583-21.635-18.161-30.212c-8.576-8.578-18.921-14.745-30.213-18.162
		V10.771c0-5.948-4.822-10.77-10.77-10.77c-5.947,0-10.77,4.822-10.77,10.77v23.8c-19.239,0.108-37.314,7.642-50.928,21.258
		c-6.393,6.394-11.491,13.872-15.094,22.042c-21.988-10.211-46.166-16.474-71.624-17.857V10.771c0-5.948-4.823-10.77-10.77-10.77
		h-33.913c-5.948,0-10.77,4.822-10.77,10.77s4.822,10.77,10.77,10.77h23.143v38.473c-27.897,1.515-54.261,8.883-77.886,20.893
		l-24.63-42.665c-1.041-1.805-2.531-3.183-4.241-4.098c-2.882-1.543-6.4-1.75-9.532-0.326c-0.317,0.144-0.631,0.303-0.939,0.48
		c-0.003,0.002-0.005,0.004-0.009,0.005l-29.362,16.95c-5.151,2.975-6.918,9.561-3.943,14.712c1.995,3.456,5.614,5.387,9.338,5.387
		c1.826,0,3.678-0.465,5.373-1.444l20.044-11.57l19.269,33.375c-22.693,14.87-42.129,34.307-57,56.999l-42.701-24.655
		c-5.152-2.976-11.738-1.208-14.712,3.942L17.344,157.37c-2.975,5.151-1.209,11.737,3.942,14.712
		c1.696,0.979,3.548,1.444,5.374,1.444c3.722,0,7.343-1.931,9.338-5.386l11.571-20.044l33.339,19.248
		c-12.011,23.625-19.378,49.988-20.893,77.885H10.77c-5.948,0-10.77,4.822-10.77,10.77c0,0.014,0.002,0.027,0.002,0.041v33.873
		c0,5.947,4.823,10.77,10.77,10.77c5.948,0,10.77-4.823,10.77-10.77V266.77h38.473c2.681,49.327,23.66,93.86,56.248,126.928
		c0.29,0.38,0.599,0.75,0.946,1.099c0.347,0.347,0.718,0.655,1.099,0.945c33.066,32.588,77.6,53.566,126.926,56.248v38.472h-23.143
		c-5.948,0-10.77,4.822-10.77,10.77c0,5.947,4.822,10.77,10.77,10.77h33.913c5.947,0,10.77-4.823,10.77-10.77v-49.241
		c27.897-1.516,54.261-8.883,77.885-20.894l19.247,33.339l-20.041,11.571c-5.151,2.975-6.917,9.561-3.942,14.712
		c1.995,3.455,5.614,5.386,9.338,5.386c1.827,0,3.679-0.465,5.374-1.444l29.361-16.953c0.002-0.001,0.004-0.002,0.006-0.003
		c1.61-0.928,2.89-2.212,3.795-3.693c1.997-3.258,2.191-7.478,0.146-11.02c-0.002-0.003-0.004-0.005-0.005-0.009l-24.647-42.694
		c22.691-14.869,42.129-34.306,57-56.999l33.375,19.268l-11.572,20.041c-2.975,5.151-1.209,11.738,3.942,14.713
		c1.695,0.979,3.548,1.444,5.374,1.444c3.722,0,7.342-1.931,9.338-5.386l16.959-29.37c1.674-2.897,1.847-6.25,0.761-9.158
		c-0.001-0.001-0.001-0.002-0.002-0.003c-0.12-0.322-0.255-0.639-0.406-0.948c-0.909-1.865-2.364-3.488-4.295-4.604l-42.668-24.631
		c12.011-23.625,19.378-49.988,20.893-77.884h38.471v23.144c0,5.947,4.823,10.77,10.77,10.77s10.77-4.823,10.77-10.77v-33.914
		C512,250.052,507.177,245.23,501.23,245.23z M368.721,71.06c9.645-9.646,22.469-14.959,36.109-14.959s26.464,5.313,36.109,14.96
		c9.647,9.646,14.96,22.47,14.96,36.111c0,13.64-5.313,26.464-14.959,36.111c-4.864,4.863-10.612,8.666-16.903,11.218
		c-16.489-27.277-39.257-50.045-66.535-66.539C360.055,81.672,363.859,75.924,368.721,71.06z M256.002,81.254
		c44.31,0,84.813,16.586,115.649,43.865L125.123,371.652C97.843,340.815,81.256,300.312,81.256,256
		C81.255,159.646,159.646,81.254,256.002,81.254z M256.002,430.747c-44.31,0-84.812-16.586-115.649-43.865l246.53-246.531
		c27.278,30.836,43.865,71.339,43.865,115.65C430.748,352.356,352.357,430.747,256.002,430.747z"/>
                        </g>
        </svg>

                </div>

                <div class="flex justify-center">
                    <h1 class="text-xl font-bold mt-6">AppTropodo</h1>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Proyecto AppTropodo</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Licenciatura en Tecnologías Computacionales <br>
                                    Diseño de interacciones <br>
                                    Docente: Viviana Yarel Rosales <br>

                                </p>
                            </div>

                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Integrantes</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    <ul>◼ Campos García Ivan Antonio</ul>
                                    <ul>◼ Contreras Lezama Jonathan</ul>
                                    <ul>◼ Duran Alberto Bryan Alberto</ul>
                                    <ul>◼ Lucas Negrete Pablo</ul>
                                </p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
