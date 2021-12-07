/*var cacheName = 'CSv1';
var precacheList = [
    '/', 
    '/index.php',
    '/CSS/style.css', 
    '/CSS/responsive.css', 
    '/gallery/SMALL/VillaMatic_01.jpg',
    '/gallery/SMALL/VillaMatic_02.jpg',
    '/gallery/SMALL/VillaMatic_03.jpg',
    '/gallery/SMALL/VillaMatic_04.jpg',
    '/gallery/SMALL/VillaMatic_05.jpg',
    '/gallery/SMALL/VillaMatic_06.jpg',
    '/gallery/SMALL/VillaMatic_07.jpg',
    '/gallery/SMALL/VillaMatic_08.jpg',
    '/gallery/SMALL/VillaMatic_09.jpg',
    '/gallery/SMALL/VillaMatic_10.jpg',
    '/gallery/SMALL/VillaMatic_11.jpg',
    '/gallery/SMALL/VillaMatic_12.jpg',
    '/galleryAsside/SMALL/VillaMatic_13.jpg',
    '/galleryAsside/SMALL/villaMatic_14.jpg',
    '/galleryAsside/SMALL/villaMatic_15.jpg',
    '/galleryAsside/SMALL/villaMatic_16.jpg'
];
debugger;
self.addEventListener('install', function(evt){
    console.log('Service Worker install event!');
    // Add the file to the cache
    evt.waitUntil(
        caches.open(cacheName).then(function(cache){
            console.log('Caching files');
            return cache.addAll(precacheList);
        }).then(function(){
            return self.skipWaiting();
        }).catch(function(err){
            console.log('Cache Failed', err);
        })
    );
});

self.addEventListener('activate', function(evt){
    console.log('Service Worker activated');
    evt.waitUntil(
        caches.keys().then(function(keyList){
            if(key !== cacheName){
                console.log('Removing Old Cache', key);
                return caches.delete(key)
            }
        })
        );
        return self.clients.claim();
});
/*
// Cache-first policy
self.addEventListener("fetch", event => {
    event.respondeWith(
        caches.match(event.request)
        .then( response => {
            if (response) {
                return response; // The URL is cached
            } else {
                return fetch(event.request); // Go to the network
            }
        })
    );
});*/