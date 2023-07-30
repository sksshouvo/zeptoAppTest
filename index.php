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
                                <img src="./icons/map-pin-user-fill-svgrepo-com.svg" class="w-4 h-4 mt-1" alt="">
                                <span>Blue</span>
                            </button>
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 hover:bg-sky-300" onclick="changeColor('text-dark-600')">
                                <img src="./icons/equalizer-svgrepo-com.svg" class="w-4 h-4 mt-1" alt="">
                                <span>Black</span>
                            </button>
                            <button class="flex justify-center block bg-white text-dark py-2 px-4 rounded-r-lg hover:bg-sky-300" onclick="changeColor('text-green-600')">
                                <img src="./icons/download-svgrepo-com.svg" class="w-4 h-4 mt-1" alt="">
                                <span>Green</span>
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
                                <img src="./icons/cloud-upload-svgrepo-com.svg" class="h-10 w-10" alt="">
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