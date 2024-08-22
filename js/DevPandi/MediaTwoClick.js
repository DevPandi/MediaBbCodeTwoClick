((window, document) => {
    'use strict'
    XF.DevPandi = XF.DevPandi || {};

    XF.DevPandi.mediaTwoClick = XF.Event.newHandler({
        eventType: 'click',
        eventNameSpace: 'DPTwoClick',

        init()
        {
        },

        click (e)
        {
            let parentElement = e.srcElement.parentElement;
            let mediaID = parentElement.dataset.mediaId || null;

            if (mediaID) {
                let content = JSON.parse(document.getElementById('twoClickData-' + mediaID).textContent);
                if (content.content) {
                    let htmlContent = XF.createElementFromString(content.content);

                    if (htmlContent) {
                        let container = document.getElementById('mediaBbCode-' + mediaID);
                        container.replaceWith(htmlContent);
                    }
                }
            }

        }
    });

    XF.Event.register('click', 'media-two-click', 'XF.DevPandi.mediaTwoClick')

})(window, document)