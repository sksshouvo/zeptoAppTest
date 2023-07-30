<!DOCTYPE html>
<html class="h-full bg-gray-100 m-0">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full m-0 font-sans">
    <div id="app" class="flex flex-wrap p-8 space-x-4">
        <!-- Components starts here -->
        <div class="flex-1">
            <fieldset class="border border-solid border-gray-700 p-3 rounded-md h-screen">
                <legend class="flex justify-center block w-full text-black-700 bg-white rounded-md drop-shadow-md p-2">
                    <img src="./icons/box-minimalistic-svgrepo-com.svg" alt="components" class="h-6 w-6 mr-2 mt-1">
                    <span class="text-lg">Components</span>
                </legend>
                <div class="flex flex-wrap">
                    <p class="text-center w-full"> <strong>Items</strong> </p>
                </div>
                <div class="flex relative hidden" id="headingElement">
                    <fieldset class="w-full border border-solid border-gray-700 p-3 rounded-md mt-2">
                        <legend class="flex text-black-700 bg-gray-200 rounded-lg p-1">Heading </legend>
                        <button
                            class="bg-white text-red-800 rounded-full w-8 h-8 absolute top-0 right-0" onclick="closeElement('#headingElement')">&times;</button>
                        <input type="text" class="w-full h-9 p-1" id="headingInput" onkeyup="preview()">
                       <div class="flex justify-between">
                        <div class="flex mt-2 space-x-1">
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 rounded-l-lg hover:bg-sky-300" onclick="changeAlign('text-left')">
                                <img src="./icons/left-align-svgrepo-com.svg" class="w-3 h-3 mt-2" alt="">
                                <span>Left</span>
                            </button>
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 hover:bg-sky-300" onclick="changeAlign('text-center')">
                                <img src="./icons/align-center-svgrepo-com.svg" class="h-4 w-4 mr-2 mt-1" alt="center">
                                <span>Center</span>
                            </button>
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 rounded-r-lg hover:bg-sky-300" onclick="changeAlign('text-right')">
                                <img src="./icons/align-right-svgrepo-com.svg" class="w-5 h-5 mt-1" alt="">
                                <span>Right</span>
                            </button>
                        </div>

                        <div class="flex mt-2 space-x-1">
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 rounded-l-lg hover:bg-sky-300" onclick="changeColor('text-blue-600')">
                                <svg class="w-4 h-4 mt-1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M17.084 15.812a7 7 0 1 0-10.168 0A5.996 5.996 0 0 1 12 13a5.996 5.996 0 0 1 5.084 2.812zM12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </g>
                                </svg>
                                <span>Blue</span>
                            </button>
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 hover:bg-sky-300" onclick="changeColor('text-dark-600')">
                                <svg class="w-4 h-4 mt-1" viewBox="0 -1 30 30" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                                    <title>equalizer</title>
                                    <desc>Created with Sketch Beta.</desc>
                                    <defs>

                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                        sketch:type="MSPage">
                                        <g id="Icon-Set" sketch:type="MSLayerGroup"
                                            transform="translate(-361.000000, -569.000000)" fill="#000000">
                                            <path
                                                d="M366,589 C364.343,589 363,587.657 363,586 C363,584.344 364.343,583 366,583 C367.657,583 369,584.344 369,586 C369,587.657 367.657,589 366,589 L366,589 Z M367,581.101 L367,570 C367,569.448 366.553,569 366,569 C365.447,569 365,569.448 365,570 L365,581.101 C362.718,581.564 361,583.581 361,586 C361,588.419 362.718,590.436 365,590.899 L365,596 C365,596.553 365.447,597 366,597 C366.553,597 367,596.553 367,596 L367,590.899 C369.282,590.436 371,588.419 371,586 C371,583.581 369.282,581.564 367,581.101 L367,581.101 Z M376,579 C374.343,579 373,577.657 373,576 C373,574.344 374.343,573 376,573 C377.657,573 379,574.344 379,576 C379,577.657 377.657,579 376,579 L376,579 Z M377,571.101 L377,570 C377,569.448 376.553,569 376,569 C375.447,569 375,569.448 375,570 L375,571.101 C372.718,571.564 371,573.581 371,576 C371,578.419 372.718,580.436 375,580.899 L375,596 C375,596.553 375.447,597 376,597 C376.553,597 377,596.553 377,596 L377,580.899 C379.282,580.436 381,578.419 381,576 C381,573.581 379.282,571.564 377,571.101 L377,571.101 Z M386,593 C384.343,593 383,591.657 383,590 C383,588.344 384.343,587 386,587 C387.657,587 389,588.344 389,590 C389,591.657 387.657,593 386,593 L386,593 Z M387,585.101 L387,570 C387,569.448 386.553,569 386,569 C385.447,569 385,569.448 385,570 L385,585.101 C382.718,585.564 381,587.581 381,590 C381,592.419 382.718,594.436 385,594.899 L385,596 C385,596.553 385.447,597 386,597 C386.553,597 387,596.553 387,596 L387,594.899 C389.282,594.436 391,592.419 391,590 C391,587.581 389.282,585.564 387,585.101 L387,585.101 Z"
                                                id="equalizer" sketch:type="MSShapeGroup">

                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span>Black</span>
                            </button>
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 rounded-r-lg hover:bg-sky-300" onclick="changeColor('text-green-600')">
                                <svg class="w-4 h-4 mt-1" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> <span>Green</span>
                            </button>
                        </div>
                       </div>
                    </fieldset>
                </div>
                <div class="flex relative hidden" id="imageElement">
                    <fieldset class="w-full border border-solid border-gray-700 p-3 rounded-md mt-2">
                        <legend class="flex text-black-700 bg-gray-200 rounded-lg p-1">Poster Image</legend>
                        <button
                            class="bg-white text-red-800 rounded-full w-8 h-8 absolute top-0 right-0" onclick="closeElement('#imageElement')">&times;</button>

                        <div
                            class="flex flex-col justify-center items-center h-80 border-dotted border-2 border-gray-400 p-2 rounded bg-white">
                            <div class="flex text-center cursor-pointer">
                                <svg class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M6.28571 19C3.91878 19 2 17.1038 2 14.7647C2 12.4256 3.91878 10.5294 6.28571 10.5294C6.56983 10.5294 6.8475 10.5567 7.11616 10.6089M14.381 8.02721C14.9767 7.81911 15.6178 7.70588 16.2857 7.70588C16.9404 7.70588 17.5693 7.81468 18.1551 8.01498M7.11616 10.6089C6.88706 9.9978 6.7619 9.33687 6.7619 8.64706C6.7619 5.52827 9.32028 3 12.4762 3C15.4159 3 17.8371 5.19371 18.1551 8.01498M7.11616 10.6089C7.68059 10.7184 8.20528 10.9374 8.66667 11.2426M18.1551 8.01498C20.393 8.78024 22 10.8811 22 13.3529C22 16.0599 20.0726 18.3221 17.5 18.8722"
                                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M12 16V22M12 16L14 18M12 16L10 18" stroke="#1C274C" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex text-center">
                                <label for="fileInput" class="cursor-pointer">
                                    <span class="text-sm"> <strong>Click to Upload</strong> or drag and drop</span>
                                    <br>
                                    <span class="text-sm">SVG, PNG, JPG or GIF [MAX 800 &times; 400px]</span>
                                    <input id="fileInput" type="file" class="hidden" accept="image/*" onchange="showPreview(event);">
                                </label>
                            </div>

                        </div>
                    </fieldset>
                </div>
                <div class="flex relative hidden" id="descriptionElement">
                    <fieldset class="w-full border border-solid border-gray-700 p-3 rounded-md mt-2">
                        <legend class="flex text-black-700 bg-gray-200 rounded-lg p-1">Description</legend>
                        <button
                            class="bg-white text-red-800 rounded-full w-8 h-8 absolute top-0 right-0" onclick="closeElement('#descriptionElement')">&times;</button>
                        <textarea id="descriptionInput" class="w-full h-20 bg-white p-1" onkeyup="preview()"></textarea>
                    </fieldset>

                </div>
                
                <div class="flex space-x-4 mt-2">
                    <button id = "headingBtn" onclick="itemBtn('#headingBtn')"
                        class="flex-1 bg-yellow-300 hover:bg-yellow-500 text-dark px-4 py-2 rounded-md">Heading</button>
                    <button id = "imageBtn" onclick="itemBtn('#imageBtn')"
                        class="flex-1 bg-green-300 hover:bg-green-500 text-green-700 px-4 py-2 rounded-md">Image</button>
                    <button id = "descriptionBtn" onclick="itemBtn('#descriptionBtn')"
                        class="flex-1 bg-blue-300 hover:bg-blue-500 text-blue-700 px-4 py-2 rounded-md">Description</button>
                </div>
            </fieldset>
        </div>
        <!-- Preview starts here -->
        <div class="flex-1" id="preview">
            <fieldset class="border border-solid border-gray-700 p-3 rounded-md  h-screen">
                <legend class="flex justify-center block w-full text-black-700 bg-white rounded-md drop-shadow-md p-2">
                    <svg fill="#000000" class="h-6 w-6 mr-2" viewBox="0 0 32 32" id="icon"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                }
                            </style>
                        </defs>
                        <title>task--view</title>
                        <circle cx="22" cy="24" r="2" />
                        <path id="_inner_path_" data-name="&lt;inner path&gt;" class="cls-1"
                            d="M22,28a4,4,0,1,1,4-4A4.0039,4.0039,0,0,1,22,28Zm0-6a2,2,0,1,0,2,2A2.0027,2.0027,0,0,0,22,22Z" />
                        <path
                            d="M29.7769,23.4785A8.64,8.64,0,0,0,22,18a8.64,8.64,0,0,0-7.7769,5.4785L14,24l.2231.5215A8.64,8.64,0,0,0,22,30a8.64,8.64,0,0,0,7.7769-5.4785L30,24ZM22,28a4,4,0,1,1,4-4A4.0045,4.0045,0,0,1,22,28Z" />
                        <path
                            d="M12,28H7V7h3v3H22V7h3v9h2V7a2,2,0,0,0-2-2H22V4a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2V5H7A2,2,0,0,0,5,7V28a2,2,0,0,0,2,2h5ZM12,4h8V8H12Z" />
                        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1"
                            width="32" height="32" />
                    </svg>
                    <span class="text-lg">Preview</span>
                </legend>
                <div class="w-full">
                    <div class="mt-5">
                        <p class="text-5xl mt-8" id="headingPreview"></p>
                    </div>
                    <div class="mt-5">
                        <img id="imgPrv" src="#" alt="your image" class="mt-5 hidden">
                    </div>
                    <div class="mt-5">
                        <p class="text-lg mt-8" id="descriptionPreview"></p>
                    </div>
                    <div class="mt-5">
                        <a href="javascript:void(0)" class="bg-white p-3 rounded-lg w-full mt-5" id="downloadBtn" download="">Download</a>
                    </div>
                    
                </div>
            </fieldset>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/index.js"></script>

</html>