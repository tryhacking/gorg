'use strict';
importScripts('/sw-toolbox.js');
toolbox.precache(['/assets/css/head.css', 'assets/css/base.min.css']);
toolbox.router.get('/assets/img/*', toolbox.cacheFirst);
toolbox.router.get('/*', toolbox.networkFirst, { networkTimeoutSeconds: 5});