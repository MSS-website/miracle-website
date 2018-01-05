/*global $, TNW */

(function ($, ns) {
    'use strict';

    ns.videoHeader = {
        init: function () {
            console.log('TNW.videoHeader.init');

            $('.video-header').each(function () {
                var $videoHeader,
                    videoId;

                $videoHeader = $(this);
                videoId = $videoHeader.attr('data-video-id');

                if (videoId !== 'undefined' && videoId.length) {
                    $('#content').tubular({videoId: videoId});
                }
            });
        }
    };
}($, TNW));

$(TNW.videoHeader.init);