((window, document) => {
    'use strict'
    const DevPandi = DevPandi || {};
    const XF = XF || {};

    DevPandi.mediaTwoClick = XF.Event.newHandler({
        eventType: 'click',
        eventNameSpace: 'DPTwoClick',

        init()
        {
        },

        click (e)
        {
            const parentElement = e.target.parentElement;
            const mediaID = parentElement.dataset.mediaId || null;

            if (mediaID) {
                const content = JSON.parse(document.getElementById('twoClickData-' + mediaID).textContent);
                if (content.content) {
                    let htmlContent = XF.createElementFromString(content.content);

                    if (htmlContent) {
                        const container = document.getElementById('mediaBbCode-' + mediaID);
                        container.replaceWith(htmlContent);
                        XF.OembedFetcher.init();
                    }
                }
            }

        }
    });

    XF.Event.register('click', 'media-two-click', 'DevPandi.mediaTwoClick')

})(window, document)