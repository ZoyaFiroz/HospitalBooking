<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic Header with Custom Buttons</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
</head>
<body>
    <header>
        <div class="logo">
            <h1>Hospital</h1>
        </div>
        <nav>
            <ul>
                <li>
                    <button class="button" style="--clr: #fff">
                        <span class="button__icon-wrapper">
                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                            </svg>
                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                            </svg>
                        </span>
                        Home
                    </button>
                </li>
                <li>
                    <button class="button" style="--clr: #fff">
                        <span class="button__icon-wrapper">
                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                            </svg>
                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                            </svg>
                        </span>
                        Search
                    </button>
                </li>
                <li>
                    <button class="button" style="--clr: #fff">
                        <span class="button__icon-wrapper">
                            <svg viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg" width="10">
                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                            </svg>
                            <svg viewBox="0 0 14 15" fill="none" width="10" xmlns="http://www.w3.org/2000/svg" class="button__icon-svg button__icon-svg--copy">
                                <path d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z" fill="currentColor"></path>
                            </svg>
                        </span>
                        About Us
                    </button>
                </li>
            </ul>
        </nav>
    </header>

    <div class="content-container">
        <div class="text-content">
            <h2>Welcome to MyWebsite</h2>
            <p>Explore a world of information and resources. Our platform is designed to provide you with the best experience, from navigating through content to finding the information you need. Join us on this journey and discover what we have to offer!</p>
        </div>
        <div class="image-container">
            <img src="images/intro_ani.jpg" alt="Centered Image" class="center-image">
        </div>
    </div>
    <li class="card">
        <ul>
        /* From Uiverse.io by 00Kubi */ 
<div
  class="relative h-[18em] w-[20em] border-2 border-[rgba(75,30,133,0.5)] rounded-[1.5em] bg-gradient-to-br from-[rgba(75,30,133,1)] via-purple-700/80 to-[rgba(75,30,133,0.2)] text-white font-nunito p-[1.5em] flex justify-center items-left flex-col gap-[1em] backdrop-blur-[12px] hover:shadow-2xl hover:shadow-purple-500/30 transition-all duration-500 group/card hover:-translate-y-1"
>
  <div
    class="absolute inset-0 bg-gradient-to-br from-purple-600/30 via-fuchsia-500/20 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-500 rounded-[1.5em]"
  ></div>
  <div
    class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(120,50,190,0.1),transparent_60%)] group-hover/card:animate-pulse"
  ></div>

  <div class="absolute top-4 right-4 flex gap-2">
    <div class="w-2 h-2 rounded-full bg-purple-300/50"></div>
    <div class="w-2 h-2 rounded-full bg-purple-300/30"></div>
    <div class="w-2 h-2 rounded-full bg-purple-300/10"></div>
  </div>

  <div
    class="relative z-10 transition-transform duration-300 group-hover/card:translate-y-[-2px] space-y-3"
  >
    <h1
      class="text-[2.2em] font-bold bg-gradient-to-r from-white via-purple-100 to-purple-200 bg-clip-text text-transparent"
    >
      Heading
    </h1>
    <p class="text-[0.9em] text-purple-100/90 leading-relaxed font-light">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolorum
      blanditiis pariatur sequi magni.
    </p>
  </div>

  <button
    class="relative h-fit w-fit px-[1.4em] py-[0.7em] mt-2 border-[1px] border-purple-300/30 rounded-full flex justify-center items-center gap-[0.7em] overflow-hidden group/btn hover:border-purple-300/50 hover:shadow-lg hover:shadow-purple-500/20 active:scale-95 transition-all duration-300 backdrop-blur-[12px] bg-purple-500/10"
  >
    <div
      class="absolute inset-0 bg-gradient-to-r from-purple-600/40 via-fuchsia-500/40 to-purple-600/40 translate-x-[-100%] group-hover/btn:translate-x-[100%] transition-transform duration-700"
    ></div>

    <p class="relative z-10 font-medium tracking-wide">Explore Now</p>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="2"
      stroke="currentColor"
      class="relative z-10 w-5 h-5 group-hover/btn:translate-x-[10%] transition-transform duration-300"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
      ></path>
    </svg>
  </button>

  <div
    class="absolute bottom-4 left-4 w-8 h-8 rounded-full bg-gradient-to-br from-purple-400/20 to-transparent blur-sm group-hover/card:animate-pulse"
  ></div>
</div>

        </ul>
    </li>

</body>
</html>
