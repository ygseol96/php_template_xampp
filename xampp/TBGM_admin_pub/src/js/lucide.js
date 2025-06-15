import { createIcons, icons } from "lucide";

(function () {
    lucideCreate();

    function lucideCreate(){

        "use strict";
        
        // Lucide Icons
        createIcons({
            icons,
            "stroke-width": 1.5,
            nameAttr: "data-lucide",
        });
        window.lucide = {
            createIcons: createIcons,
            icons: icons,
        };
    }
})();
