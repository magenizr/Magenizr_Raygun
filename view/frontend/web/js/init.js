define([
        'jquery'
    ], function ($) {
        'use strict';

        return function (settings) {

            $(document).ready(function () {

                if (settings.debug) {
                    console.log('Magenizr:Raygun');
                    console.log(settings);
                }

                rg4js('apiKey', settings.apiKey);
                rg4js('enableCrashReporting', settings.trackError);
                rg4js('enablePulse', settings.trackPulse);

                if (settings.isLoggedIn) {

                    rg4js('setUser', {
                        identifier: settings.userData.identifier,
                        isAnonymous: settings.isAnonymous,
                        email: settings.userData.email,
                        fullName: settings.userData.fullName
                    });
                }

                rg4js('options', {
                    debugMode: settings.debug,
                    allowInsecureSubmissions: settings.allowInsecureSubmissions,
                    excludedHostnames: (settings.excludedHostnames.length !== 0) ? settings.excludedHostnames.replace(/\./g, '\\.').split(',') : ''
                });
            });
        }
    }
);
