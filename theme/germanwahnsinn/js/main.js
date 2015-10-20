/*!
 *
 *  Web Starter Kit
 *  Copyright 2014 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *    https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */



(function () {
    'use strict';

    var querySelector = document.querySelector.bind(document);

    var navContainer = querySelector('.nav-container');
    var body = document.body;
    var appbarElement = querySelector('.app-bar');
    var menuBtn = querySelector('.menu');
    var main = querySelector('main');
    var closeNav = querySelector('.close-nav');

    function closeMenu() {
        body.classList.remove('nav-open');
        appbarElement.classList.remove('open');
        navContainer.classList.remove('open');
    }

    function toggleMenu() {
        body.classList.toggle('nav-open');
        appbarElement.classList.toggle('open');
        navContainer.classList.toggle('open');
        navContainer.classList.add('opened');
    }


    closeNav.addEventListener('click', closeMenu);
    main.addEventListener('click', closeMenu);
    menuBtn.addEventListener('click', toggleMenu);
    navContainer.addEventListener('click', function (event) {
        if (event.target.nodeName === 'A' || event.target.nodeName === 'LI') {
            closeMenu();
        }
    });

    var video = $('.js-video');

    function addSourceToVideo(src, type) {
        var source = document.createElement('source');
        source.src = src;
        source.type = 'video/mp4';
        source.autoplay = 'false';
        querySelector('.background-video').appendChild(source);
    }

    function fullLoaded(e){
        if( video.get(0).readyState === 4 ) {
            video.addClass('is-loaded');
            video.get(0).play();
        }
    }


    if(window.innerWidth >= 1024) {
        var videoUrl = $('.js-video').data('video-url');

        if(videoUrl.length > 0) {
            addSourceToVideo(videoUrl);
        }

        video.get(0).addEventListener('progress', fullLoaded,false);
    }


    $('.js-toggle-video').click(function(){
        var video = $('.js-video'),
            videoParent = video.parent();
        if(videoParent.hasClass('is-pause')){
            video.get(0).play();
            videoParent.removeClass('is-pause');
        }
        else {
            video.get(0).pause();
            videoParent.addClass('is-pause');
        }
    });


    $('.js-close-overlay').click(function(){
        $('.js-overlay').removeClass('is-open');
        $('body').removeClass('open-overlay');
    });

    $('.js-open-overlay').click(function(e){
        event.preventDefault(e);
        if($(this).data('overlay')) {
            var content = $(this).data('overlay');
            $('.js-overlay-' + content).addClass('is-open');
            $('.js-toggle-video').trigger('clicl');
        }
        else {
            $('.js-overlay').removeClass('is-open');
            $('.js-overlay').addClass('is-open');
            $('.js-toggle-video').trigger('click');
        }

        $('body').addClass('open-overlay');
    });


})();