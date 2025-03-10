<x-layouts.app.rbs>
    <!-- ALVA -->
    <div id="bg1" class="min-h-screen w-full bg-cover bg-center bg-no-repeat bg-image bg-local xl:bg-fixed" style="background-image: url('{{ asset('assets/images/backgrounds/_BS_7141.webp') }}')">
        <div class="absolute left-1/2 bottom-15 z-10 -translate-x-1/2 text-center">
            <div class="max-w-2xl rounded-xl bg-white/20 shadow-lg ring-1 ring-black/5 bg-slate/40 p-8 backdrop-blur-sm">
                <h1 class="mb-4 text-6xl font-semibold text-black" style="font-family: 'Rouge Script', cursive;">Velkommen</h1>
                <p class="text-lg text-black">
                    Fotograf med passion for at fange de perfekte øjeblikke.
                    Specialiseret i portræt-, event- og naturfotografering.
                </p>
            </div>
        </div>
    </div>

    <!-- OM MIG -->
    <div id="about" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <div class="pt-1"></div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                            Om mig
                        </h2>

                        <p class="text-gray-900 md:w-[90%] sm:w-full">
                            Jeg er fotograf og har været det i ca. 10 år, jeg finder stor fornøjelse i at tage billeder. Især når man lige får et specielt godt billede med hjem, hvor lyset lige er helt rigtigt og alt bare harmonerer!
                            <br /><br />
                            Portrætter af folk, lidt på afstand, synes jeg er meget interessant, for min oplevelse er, at man fanger noget ægte.
                            <br /><br />
                            Derudover tager jeg en del sportsbilleder til hhv håndbold, floorball og fodbold. Her fylder de sociale aspekter af arrangementet mindst lige så meget, som spillet.
                            <br /><br />
                            Jeg har eget atalier i Karup by, hvor det er muligt at få taget portrætter.
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('assets/images/profile.webp') }}" alt="">
        </div>
    </div>

    <!-- AUDI -->
    <div id="bg2" class="min-h-screen w-full bg-cover bg-center bg-no-repeat bg-image bg-local xl:bg-fixed hidden md:block" style="background-image: url('{{ asset('assets/images/backgrounds/AudiA5-HøfdeQ-facebook.webp') }}')">
        <div class="relative fixed top-150 w-[40vw] left-[20vw] rounded-xl bg-white/20 shadow-lg ring-1 ring-black/5 bg-slate/40 p-8 backdrop-blur-sm">
            <p class="text-white">
                En sensommerdag blev jeg spurgt, om jeg ville tage nogle portrætter af et par.<br />Vi lagde os ret hurtigt fast på, at vi skulle til Høfde Q.<br />
                <br />
                Denne Audi A5 spejlede sig i solnedgangen, hvilket jeg var nød til at få med hjem også!
            </p>
        </div>
    </div>

    <!-- CYKLING -->
    <div id="bg3" class="min-h-96 max-h-96 w-full bg-cover bg-no-repeat bg-image bg-local xl:bg-fixed bg-[center_0%] sm:bg-[90%_center]" 
        style="background-image: url('{{ asset('assets/images/backgrounds/_BS_1813-2.webp') }}')">
    </div>

    <!-- BABYFOTOGRAF -->
    <div class="relative text-black py-10 bg-[#9d3737]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="text-white">
                    <h2 class="text-2xl font-bold mb-4">En passion for at fange livets første øjeblikke</h2>
                    <p class="leading-relaxed">
                        Jeg foreviger de små, dyrebare øjeblikke, hvor et nyt liv udfolder sig. De første smil, de små hænder og den umiskendelige følelse af kærlighed – alt sammen indfanget i billeder, der bevarer minderne for altid.<br />
                        <br />
                        Skal I have taget billeder af jeres lille nye familiemedlem?
                    </p>
                </div>
                <div class="relative h-[400px]">
                    <img src="{{ asset('assets/images/content/_BS_1598-Edit.webp') }}" alt="Fotograf i aktion" class="absolute inset-0 w-full h-full object-cover rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </div>

    <!-- LIVA -->
    <div id="bg4" class="min-h-screen w-full bg-cover bg-center bg-no-repeat bg-image bg-local xl:bg-fixed" style="background-image: url('{{ asset('assets/images/backgrounds/_BS_7146.webp') }}')">
        
    </div>
</x-layouts.app.rbs>