---

title: A Survey of SVG Abstractions
date: 2017-12-05 13:05 UTC
tags:
    - svg
    - art
    - isamu noguchi
---

I saw my first Noguchi in February 2017 at the Smithsonian American Art
Museum in Washington, D.C.  

_Paris Abstraction_,1928 called out to me from the minute I saw it.  It was
also the _first_ work in the exihibition that one would have seen rounding the
corner into the exhibit hall.

This work uses an economy of shapes and textures.  It has that special quality
where one can't really think of anything left to add to it or of anything that
could be taken away.  This made it a good candidate for digital reproduction.

<svg width="520" height="700">
    <defs>
        <clipPath id="circleClip">
            <rect x="-1" y="-1" width="164" height="81" />
            <rect x="-1" y="80" width="82" height="81" />
        </clipPath>
        <pattern id="bg-texture" x="0" y="0" width="4" height="4"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" fill="#DA9B72" />
            <path fill='%23da9b72' fill-opacity='0.1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'></path>
        </pattern>
    </defs>
    <rect x="0" y="0" width="100%" height="100%" fill="url(#bg-texture)" />
    <g transform="translate(180 420)">
        <rect x="79" y="159" width="30" height="100" fill="#DEBAA6" />
        <circle cx="80" cy="80" r="80" stroke="black" stroke-width="2"
         fill="url(#bg-texture)" clip-path="url(#circleClip)" />
        <line x1="0" y1="0" x2="0" y2="440"
            stroke-width="2" stroke="black"
            transform="translate(80 -370)"/>
        <line x1="0" y1="0" x2="0" y2="460"
            stroke-width="1" stroke="#5C2300"
            transform="translate(50 -390)"/>
        <line x1="0" y1="0" x2="0" y2="430"
            stroke-width="1" stroke="#5C2300"
            transform="translate(110 -350)"/>
        <line x1="0" y1="0" x2="60" y2="40"
            stroke-width="1" stroke="#5C2300"
            transform="translate(50 -390)"/>
        <line x1="0" y1="0" x2="60" y2="40"
            stroke-width="1" stroke="#5C2300"
            transform="translate(50 -297.5)"/>
        <line x1="0" y1="0" x2="30" y2="20"
            stroke-width="1" stroke="#5C2300"
            transform="translate(50 -205)"/>
        <line x1="0" y1="0" x2="30" y2="20"
            stroke-width="1" stroke="#5C2300"
            transform="translate(50 -112.5)"/>
        <line x1="0" y1="0" x2="30" y2="20"
            stroke-width="1" stroke="#5C2300"
            transform="translate(50 -20)"/>
        <polygon points="50 60, 160 80, 110 100, 0 80"
            fill="#DEBAA6" />
        <line x1="0" y1="0" x2="0" y2="80"
            stroke-width="2" stroke="black"
            transform="translate(80 80)"/>
    </g>
</svg>

