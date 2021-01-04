<?php

use Illuminate\Database\Seeder;
use App\Models\Icon\IconModel;

class IconMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icon_master')->truncate();

        $datas = [
            ['class' => 'cil-3d'],
            ['class' => 'cil-4k'],
            ['class' => 'cil-account-logout'],
            ['class' => 'cil-action-redo'],
            ['class' => 'cil-action-undo'],
            ['class' => 'cil-address-book'],
            ['class' => 'cil-airplane-mode'],
            ['class' => 'cil-airplane-mode-off'],
            ['class' => 'cil-airplay'],
            ['class' => 'cil-alarm'],
            ['class' => 'cil-album'],
            ['class' => 'cil-align-center'],
            ['class' => 'cil-align-left'],
            ['class' => 'cil-align-right'],
            ['class' => 'cil-american-football'],
            ['class' => 'cil-animal'],
            ['class' => 'cil-aperture'],
            ['class' => 'cil-apple'],
            ['class' => 'cil-applications'],
            ['class' => 'cil-applications-settings'],
            ['class' => 'cil-apps'],
            ['class' => 'cil-apps-settings'],
            ['class' => 'cil-arrow-bottom'],
            ['class' => 'cil-arrow-circle-bottom'],
            ['class' => 'cil-arrow-circle-left'],
            ['class' => 'cil-arrow-circle-right'],
            ['class' => 'cil-arrow-circle-top'],
            ['class' => 'cil-arrow-left'],
            ['class' => 'cil-arrow-right'],
            ['class' => 'cil-arrow-thick-bottom'],
            ['class' => 'cil-arrow-thick-from-bottom'],
            ['class' => 'cil-arrow-thick-from-left'],
            ['class' => 'cil-arrow-thick-from-right'],
            ['class' => 'cil-arrow-thick-from-top'],
            ['class' => 'cil-arrow-thick-left'],
            ['class' => 'cil-arrow-thick-right'],
            ['class' => 'cil-arrow-thick-to-bottom'],
            ['class' => 'cil-arrow-thick-to-left'],
            ['class' => 'cil-arrow-thick-to-right'],
            ['class' => 'cil-arrow-thick-to-top'],
            ['class' => 'cil-arrow-thick-top'],
            ['class' => 'cil-arrow-top'],
            ['class' => 'cil-assistive-listening-system'],
            ['class' => 'cil-asterisk'],
            ['class' => 'cil-asterisk-circle'],
            ['class' => 'cil-at'],
            ['class' => 'cil-audio'],
            ['class' => 'cil-audio-description'],
            ['class' => 'cil-audio-spectrum'],
            ['class' => 'cil-av-timer'],
            ['class' => 'cil-baby'],
            ['class' => 'cil-baby-carriage'],
            ['class' => 'cil-backspace'],
            ['class' => 'cil-badge'],
            ['class' => 'cil-balance-scale'],
            ['class' => 'cil-ban'],
            ['class' => 'cil-bank'],
            ['class' => 'cil-bar-chart'],
            ['class' => 'cil-barcode'],
            ['class' => 'cil-baseball'],
            ['class' => 'cil-basket'],
            ['class' => 'cil-basketball'],
            ['class' => 'cil-bath'],
            ['class' => 'cil-bathroom'],
            ['class' => 'cil-battery-0'],
            ['class' => 'cil-battery-3'],
            ['class' => 'cil-battery-5'],
            ['class' => 'cil-battery-alert'],
            ['class' => 'cil-battery-empty'],
            ['class' => 'cil-battery-full'],
            ['class' => 'cil-battery-slash'],
            ['class' => 'cil-beach-access'],
            ['class' => 'cil-beaker'],
            ['class' => 'cil-bed'],
            ['class' => 'cil-bell'],
            ['class' => 'cil-bell-exclamation'],
            ['class' => 'cil-bike'],
            ['class' => 'cil-birthday-cake'],
            ['class' => 'cil-blind'],
            ['class' => 'cil-bluetooth'],
            ['class' => 'cil-blur'],
            ['class' => 'cil-blur-circular'],
            ['class' => 'cil-blur-linear'],
            ['class' => 'cil-boat-alt'],
            ['class' => 'cil-bold'],
            ['class' => 'cil-bolt'],
            ['class' => 'cil-bolt-circle'],
            ['class' => 'cil-book'],
            ['class' => 'cil-bookmark'],
            ['class' => 'cil-border-all'],
            ['class' => 'cil-border-bottom'],
            ['class' => 'cil-border-clear'],
            ['class' => 'cil-border-horizontal'],
            ['class' => 'cil-border-inner'],
            ['class' => 'cil-border-left'],
            ['class' => 'cil-border-outer'],
            ['class' => 'cil-border-right'],
            ['class' => 'cil-border-style'],
            ['class' => 'cil-border-top'],
            ['class' => 'cil-border-vertical'],
            ['class' => 'cil-bowling'],
            ['class' => 'cil-braille'],
            ['class' => 'cil-briefcase'],
            ['class' => 'cil-brightness'],
            ['class' => 'cil-british-pound'],
            ['class' => 'cil-browser'],
            ['class' => 'cil-brush'],
            ['class' => 'cil-brush-alt'],
            ['class' => 'cil-bug'],
            ['class' => 'cil-building'],
            ['class' => 'cil-bullhorn'],
            ['class' => 'cil-burger'],
            ['class' => 'cil-burn'],
            ['class' => 'cil-bus-alt'],
            ['class' => 'cil-calculator'],
            ['class' => 'cil-calendar'],
            ['class' => 'cil-calendar-check'],
            ['class' => 'cil-camera'],
            ['class' => 'cil-camera-control'],
            ['class' => 'cil-camera-roll'],
            ['class' => 'cil-car-alt'],
            ['class' => 'cil-caret-bottom'],
            ['class' => 'cil-caret-left'],
            ['class' => 'cil-caret-right'],
            ['class' => 'cil-caret-top'],
            ['class' => 'cil-cart'],
            ['class' => 'cil-cash'],
            ['class' => 'cil-casino'],
            ['class' => 'cil-cast'],
            ['class' => 'cil-cat'],
            ['class' => 'cil-cc'],
            ['class' => 'cil-center-focus'],
            ['class' => 'cil-chart'],
            ['class' => 'cil-chart-line'],
            ['class' => 'cil-chart-pie'],
            ['class' => 'cil-chat-bubble'],
            ['class' => 'cil-check'],
            ['class' => 'cil-check-alt'],
            ['class' => 'cil-check-circle'],
            ['class' => 'cil-chevron-bottom'],
            ['class' => 'cil-chevron-circle-down-alt'],
            ['class' => 'cil-chevron-circle-left-alt'],
            ['class' => 'cil-chevron-circle-right-alt'],
            ['class' => 'cil-chevron-circle-up-alt'],
            ['class' => 'cil-chevron-double-down'],
            ['class' => 'cil-chevron-double-left'],
            ['class' => 'cil-chevron-double-right'],
            ['class' => 'cil-chevron-double-up'],
            ['class' => 'cil-chevron-left'],
            ['class' => 'cil-chevron-right'],
            ['class' => 'cil-chevron-top'],
            ['class' => 'cil-child'],
            ['class' => 'cil-child-friendly'],
            ['class' => 'cil-circle'],
            ['class' => 'cil-clear-all'],
            ['class' => 'cil-clipboard'],
            ['class' => 'cil-clock'],
            ['class' => 'cil-clone'],
            ['class' => 'cil-closed-captioning'],
            ['class' => 'cil-cloud'],
            ['class' => 'cil-cloud-download'],
            ['class' => 'cil-cloud-upload'],
            ['class' => 'cil-cloudy'],
            ['class' => 'cil-code'],
            ['class' => 'cil-coffee'],
            ['class' => 'cil-cog'],
            ['class' => 'cil-color-border'],
            ['class' => 'cil-color-fill'],
            ['class' => 'cil-color-palette'],
            ['class' => 'cil-columns'],
            ['class' => 'cil-command'],
            ['class' => 'cil-comment-bubble'],
            ['class' => 'cil-comment-square'],
            ['class' => 'cil-compass'],
            ['class' => 'cil-compress'],
            ['class' => 'cil-contact'],
            ['class' => 'cil-contrast'],
            ['class' => 'cil-control'],
            ['class' => 'cil-copy'],
            ['class' => 'cil-couch'],
            ['class' => 'cil-credit-card'],
            ['class' => 'cil-crop'],
            ['class' => 'cil-crop-rotate'],
            ['class' => 'cil-cursor'],
            ['class' => 'cil-cursor-move'],
            ['class' => 'cil-cut'],
            ['class' => 'cil-data-transfer-down'],
            ['class' => 'cil-data-transfer-up'],
            ['class' => 'cil-deaf'],
            ['class' => 'cil-delete'],
            ['class' => 'cil-description'],
            ['class' => 'cil-devices'],
            ['class' => 'cil-dialpad'],
            ['class' => 'cil-diamond'],
            ['class' => 'cil-dinner'],
            ['class' => 'cil-disabled'],
            ['class' => 'cil-dog'],
            ['class' => 'cil-dollar'],
            ['class' => 'cil-door'],
            ['class' => 'cil-double-quote-sans-left'],
            ['class' => 'cil-double-quote-sans-right'],
            ['class' => 'cil-drink'],
            ['class' => 'cil-drink-alcohol'],
            ['class' => 'cil-drop'],
            ['class' => 'cil-eco'],
            ['class' => 'cil-education'],
            ['class' => 'cil-elevator'],
            ['class' => 'cil-envelope-closed'],
            ['class' => 'cil-envelope-letter'],
            ['class' => 'cil-envelope-open'],
            ['class' => 'cil-equalizer'],
            ['class' => 'cil-ethernet'],
            ['class' => 'cil-euro'],
            ['class' => 'cil-excerpt'],
            ['class' => 'cil-exit-to-app'],
            ['class' => 'cil-expand-down'],
            ['class' => 'cil-expand-left'],
            ['class' => 'cil-expand-right'],
            ['class' => 'cil-expand-up'],
            ['class' => 'cil-exposure'],
            ['class' => 'cil-external-link'],
            ['class' => 'cil-eyedropper'],
            ['class' => 'cil-face'],
            ['class' => 'cil-face-dead'],
            ['class' => 'cil-factory'],
            ['class' => 'cil-factory-slash'],
            ['class' => 'cil-fastfood'],
            ['class' => 'cil-fax'],
            ['class' => 'cil-featured-playlist'],
            ['class' => 'cil-file'],
            ['class' => 'cil-filter'],
            ['class' => 'cil-filter-frames'],
            ['class' => 'cil-filter-photo'],
            ['class' => 'cil-filter-square'],
            ['class' => 'cil-filter-x'],
            ['class' => 'cil-find-in-page'],
            ['class' => 'cil-fingerprint'],
            ['class' => 'cil-fire'],
            ['class' => 'cil-flag-alt'],
            ['class' => 'cil-flight-takeoff'],
            ['class' => 'cil-flip'],
            ['class' => 'cil-flip-to-back'],
            ['class' => 'cil-flip-to-front'],
            ['class' => 'cil-flower'],
            ['class' => 'cil-folder'],
            ['class' => 'cil-folder-open'],
            ['class' => 'cil-font'],
            ['class' => 'cil-football'],
            ['class' => 'cil-fork'],
            ['class' => 'cil-fridge'],
            ['class' => 'cil-frown'],
            ['class' => 'cil-fullscreen'],
            ['class' => 'cil-fullscreen-exit'],
            ['class' => 'cil-functions'],
            ['class' => 'cil-functions-alt'],
            ['class' => 'cil-gamepad'],
            ['class' => 'cil-garage'],
            ['class' => 'cil-gem'],
            ['class' => 'cil-gif'],
            ['class' => 'cil-gift'],
            ['class' => 'cil-globe-alt'],
            ['class' => 'cil-golf'],
            ['class' => 'cil-golf-alt'],
            ['class' => 'cil-gradient'],
            ['class' => 'cil-grain'],
            ['class' => 'cil-graph'],
            ['class' => 'cil-grid'],
            ['class' => 'cil-grid-slash'],
            ['class' => 'cil-group'],
            ['class' => 'cil-hamburger-menu'],
            ['class' => 'cil-hand-point-down'],
            ['class' => 'cil-hand-point-left'],
            ['class' => 'cil-hand-point-right'],
            ['class' => 'cil-hand-point-up'],
            ['class' => 'cil-happy'],
            ['class' => 'cil-hd'],
            ['class' => 'cil-hdr'],
            ['class' => 'cil-header'],
            ['class' => 'cil-headphones'],
            ['class' => 'cil-healing'],
            ['class' => 'cil-heart'],
            ['class' => 'cil-highlighter'],
            ['class' => 'cil-highligt'],
            ['class' => 'cil-history'],
            ['class' => 'cil-home'],
            ['class' => 'cil-hospital'],
            ['class' => 'cil-hot-tub'],
            ['class' => 'cil-house'],
            ['class' => 'cil-https'],
            ['class' => 'cil-image'],
            ['class' => 'cil-image-broken'],
            ['class' => 'cil-image-plus'],
            ['class' => 'cil-inbox'],
            ['class' => 'cil-indent-decrease'],
            ['class' => 'cil-indent-increase'],
            ['class' => 'cil-industry'],
            ['class' => 'cil-industry-slash'],
            ['class' => 'cil-infinity'],
            ['class' => 'cil-info'],
            ['class' => 'cil-input'],
            ['class' => 'cil-input-hdmi'],
            ['class' => 'cil-input-power'],
            ['class' => 'cil-institution'],
            ['class' => 'cil-italic'],
            ['class' => 'cil-justify-center'],
            ['class' => 'cil-justify-left'],
            ['class' => 'cil-justify-right'],
            ['class' => 'cil-keyboard'],
            ['class' => 'cil-lan'],
            ['class' => 'cil-language'],
            ['class' => 'cil-laptop'],
            ['class' => 'cil-layers'],
            ['class' => 'cil-leaf'],
            ['class' => 'cil-lemon'],
            ['class' => 'cil-level-down'],
            ['class' => 'cil-level-up'],
            ['class' => 'cil-library'],
            ['class' => 'cil-library-add'],
            ['class' => 'cil-library-building'],
            ['class' => 'cil-life-ring'],
            ['class' => 'cil-lightbulb'],
            ['class' => 'cil-line-spacing'],
            ['class' => 'cil-line-style'],
            ['class' => 'cil-line-weight'],
            ['class' => 'cil-link'],
            ['class' => 'cil-link-alt'],
            ['class' => 'cil-link-broken'],
            ['class' => 'cil-list'],
            ['class' => 'cil-list-filter'],
            ['class' => 'cil-list-high-priority'],
            ['class' => 'cil-list-low-priority'],
            ['class' => 'cil-list-numbered'],
            ['class' => 'cil-list-numbered-rtl'],
            ['class' => 'cil-list-rich'],
            ['class' => 'cil-location-pin'],
            ['class' => 'cil-lock-locked'],
            ['class' => 'cil-lock-unlocked'],
            ['class' => 'cil-locomotive'],
            ['class' => 'cil-loop'],
            ['class' => 'cil-loop-1'],
            ['class' => 'cil-loop-circular'],
            ['class' => 'cil-low-vision'],
            ['class' => 'cil-magnifying-glass'],
            ['class' => 'cil-map'],
            ['class' => 'cil-media-eject'],
            ['class' => 'cil-media-pause'],
            ['class' => 'cil-media-play'],
            ['class' => 'cil-media-record'],
            ['class' => 'cil-media-skip-backward'],
            ['class' => 'cil-media-skip-forward'],
            ['class' => 'cil-media-step-backward'],
            ['class' => 'cil-media-step-forward'],
            ['class' => 'cil-media-stop'],
            ['class' => 'cil-medical-cross'],
            ['class' => 'cil-meh'],
            ['class' => 'cil-memory'],
            ['class' => 'cil-menu'],
            ['class' => 'cil-mic'],
            ['class' => 'cil-microphone'],
            ['class' => 'cil-minus'],
            ['class' => 'cil-mobile'],
            ['class' => 'cil-mobile-landscape'],
            ['class' => 'cil-money'],
            ['class' => 'cil-monitor'],
            ['class' => 'cil-mood-bad'],
            ['class' => 'cil-mood-good'],
            ['class' => 'cil-mood-very-bad'],
            ['class' => 'cil-mood-very-good'],
            ['class' => 'cil-moon'],
            ['class' => 'cil-mouse'],
            ['class' => 'cil-mouth-slash'],
            ['class' => 'cil-move'],
            ['class' => 'cil-movie'],
            ['class' => 'cil-mug'],
            ['class' => 'cil-mug-tea'],
            ['class' => 'cil-music-note'],
            ['class' => 'cil-newspaper'],
            ['class' => 'cil-note-add'],
            ['class' => 'cil-notes'],
            ['class' => 'cil-object-group'],
            ['class' => 'cil-object-ungroup'],
            ['class' => 'cil-opacity'],
            ['class' => 'cil-opentype'],
            ['class' => 'cil-options'],
            ['class' => 'cil-paint'],
            ['class' => 'cil-paint-bucket'],
            ['class' => 'cil-paper-plane'],
            ['class' => 'cil-paperclip'],
            ['class' => 'cil-paragraph'],
            ['class' => 'cil-paw'],
            ['class' => 'cil-pen'],
            ['class' => 'cil-pen-alt'],
            ['class' => 'cil-pen-nib'],
            ['class' => 'cil-pencil'],
            ['class' => 'cil-people'],
            ['class' => 'cil-phone'],
            ['class' => 'cil-pin'],
            ['class' => 'cil-pizza'],
            ['class' => 'cil-plant'],
            ['class' => 'cil-playlist-add'],
            ['class' => 'cil-plus'],
            ['class' => 'cil-pool'],
            ['class' => 'cil-power-standby'],
            ['class' => 'cil-pregnant'],
            ['class' => 'cil-print'],
            ['class' => 'cil-pushchair'],
            ['class' => 'cil-puzzle'],
            ['class' => 'cil-qr-code'],
            ['class' => 'cil-rain'],
            ['class' => 'cil-rectangle'],
            ['class' => 'cil-recycle'],
            ['class' => 'cil-reload'],
            ['class' => 'cil-report-slash'],
            ['class' => 'cil-resize-both'],
            ['class' => 'cil-resize-height'],
            ['class' => 'cil-resize-width'],
            ['class' => 'cil-restaurant'],
            ['class' => 'cil-room'],
            ['class' => 'cil-router'],
            ['class' => 'cil-rowing'],
            ['class' => 'cil-rss'],
            ['class' => 'cil-ruble'],
            ['class' => 'cil-running'],
            ['class' => 'cil-sad'],
            ['class' => 'cil-satelite'],
            ['class' => 'cil-save'],
            ['class' => 'cil-school'],
            ['class' => 'cil-screen-desktop'],
            ['class' => 'cil-screen-smartphone'],
            ['class' => 'cil-scrubber'],
            ['class' => 'cil-search'],
            ['class' => 'cil-send'],
            ['class' => 'cil-settings'],
            ['class' => 'cil-share'],
            ['class' => 'cil-share-all'],
            ['class' => 'cil-share-alt'],
            ['class' => 'cil-share-boxed'],
            ['class' => 'cil-shield-alt'],
            ['class' => 'cil-short-text'],
            ['class' => 'cil-shower'],
            ['class' => 'cil-sign-language'],
            ['class' => 'cil-signal-cellular-0'],
            ['class' => 'cil-signal-cellular-3'],
            ['class' => 'cil-signal-cellular-4'],
            ['class' => 'cil-sim'],
            ['class' => 'cil-sitemap'],
            ['class' => 'cil-smile'],
            ['class' => 'cil-smile-plus'],
            ['class' => 'cil-smoke'],
            ['class' => 'cil-smoke-free'],
            ['class' => 'cil-smoke-slash'],
            ['class' => 'cil-smoking-room'],
            ['class' => 'cil-snowflake'],
            ['class' => 'cil-soccer'],
            ['class' => 'cil-sofa'],
            ['class' => 'cil-sort-alpha-down'],
            ['class' => 'cil-sort-alpha-up'],
            ['class' => 'cil-sort-ascending'],
            ['class' => 'cil-sort-descending'],
            ['class' => 'cil-sort-numeric-down'],
            ['class' => 'cil-sort-numeric-up'],
            ['class' => 'cil-spa'],
            ['class' => 'cil-space-bar'],
            ['class' => 'cil-speak'],
            ['class' => 'cil-speaker'],
            ['class' => 'cil-speech'],
            ['class' => 'cil-speedometer'],
            ['class' => 'cil-spreadsheet'],
            ['class' => 'cil-square'],
            ['class' => 'cil-star'],
            ['class' => 'cil-star-half'],
            ['class' => 'cil-storage'],
            ['class' => 'cil-stream'],
            ['class' => 'cil-strikethrough'],
            ['class' => 'cil-sun'],
            ['class' => 'cil-swap-horizontal'],
            ['class' => 'cil-swap-vertical'],
            ['class' => 'cil-swimming'],
            ['class' => 'cil-sync'],
            ['class' => 'cil-tablet'],
            ['class' => 'cil-tag'],
            ['class' => 'cil-tags'],
            ['class' => 'cil-task'],
            ['class' => 'cil-taxi'],
            ['class' => 'cil-tennis'],
            ['class' => 'cil-tennis-ball'],
            ['class' => 'cil-terminal'],
            ['class' => 'cil-terrain'],
            ['class' => 'cil-text'],
            ['class' => 'cil-text-shapes'],
            ['class' => 'cil-text-size'],
            ['class' => 'cil-text-square'],
            ['class' => 'cil-text-strike'],
            ['class' => 'cil-thumb-down'],
            ['class' => 'cil-thumb-up'],
            ['class' => 'cil-toggle-off'],
            ['class' => 'cil-toggle-on'],
            ['class' => 'cil-toilet'],
            ['class' => 'cil-touch-app'],
            ['class' => 'cil-transfer'],
            ['class' => 'cil-translate'],
            ['class' => 'cil-trash'],
            ['class' => 'cil-triangle'],
            ['class' => 'cil-truck'],
            ['class' => 'cil-tv'],
            ['class' => 'cil-underline'],
            ['class' => 'cil-usb'],
            ['class' => 'cil-user'],
            ['class' => 'cil-user-female'],
            ['class' => 'cil-user-follow'],
            ['class' => 'cil-user-plus'],
            ['class' => 'cil-user-unfollow'],
            ['class' => 'cil-user-x'],
            ['class' => 'cil-vector'],
            ['class' => 'cil-vertical-align-bottom'],
            ['class' => 'cil-vertical-align-center'],
            ['class' => 'cil-vertical-align-top'],
            ['class' => 'cil-video'],
            ['class' => 'cil-videogame'],
            ['class' => 'cil-view-column'],
            ['class' => 'cil-view-module'],
            ['class' => 'cil-view-quilt'],
            ['class' => 'cil-view-stream'],
            ['class' => 'cil-voice'],
            ['class' => 'cil-voice-over-record'],
            ['class' => 'cil-volume-high'],
            ['class' => 'cil-volume-low'],
            ['class' => 'cil-volume-off'],
            ['class' => 'cil-walk'],
            ['class' => 'cil-wallet'],
            ['class' => 'cil-wallpaper'],
            ['class' => 'cil-warning'],
            ['class' => 'cil-watch'],
            ['class' => 'cil-wc'],
            ['class' => 'cil-weightlifitng'],
            ['class' => 'cil-wheelchair'],
            ['class' => 'cil-wifi-signal-0'],
            ['class' => 'cil-wifi-signal-1'],
            ['class' => 'cil-wifi-signal-2'],
            ['class' => 'cil-wifi-signal-3'],
            ['class' => 'cil-wifi-signal-4'],
            ['class' => 'cil-wifi-signal-off'],
            ['class' => 'cil-window'],
            ['class' => 'cil-window-maximize'],
            ['class' => 'cil-window-minimize'],
            ['class' => 'cil-window-restore'],
            ['class' => 'cil-wrap-text'],
            ['class' => 'cil-x'],
            ['class' => 'cil-x-circle'],
            ['class' => 'cil-yen'],
            ['class' => 'cil-zoom'],
            ['class' => 'cil-zoom-in'],
            ['class' => 'cil-zoom-out'],
        ];
        foreach($datas as $data) {
            DB::table('icon_master')->insert($data);
        }
    }
}
