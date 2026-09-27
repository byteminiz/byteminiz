<?php

namespace App\Helpers;

class DriveStorage
{
    public static array $fileMap = [
        // images
        'byte_miniz.png' => '1XpkxnUu1gtizMkpd086kB6CO5CjiRzc0',
        'byte.jpg' => '1BCDiCFnQ5657E9Cy-Yhnf70G9s04UrkG',
        'byteminiz_transperent_bg.png' => '1jICugAmB2VA6QBSRap-3rU5k0nKRrakE',
        'cheese_corn.jpg' => '1XHYOS7FjRRO1u9qtuVKNohIo0-cpLoYn',
        'cheesechillicombo.png' => '1NPmZQ8PZP1_5HSHaYIrfswtA1jh1mG3h',
        'cheesecornbbite.png' => '1sty55l0JkE7HX6D2R7B6EH5UAeEUJ_gD',
        'chilli_garlic.jpg' => '1DQSj4zVX_aHkpYRp7xfmGJZZ-lxVHon2',
        'chillicheesebbite.png' => '1hz726UR42eVto-dq6BGmFjsqw_NI9L4T',
        'chilligarlicbbite.png' => '1OWXAHDFyz7Je65V7v--OF_JxvGL6gg-r',
        'chilligarliccombo.png' => '1RNY7J8QwUJKxc3UFC49EMo6pwa3T96Uq',
        'chilly_cheese.jpg' => '1BndRiDBhiC8ka3aEwWn4MYjmbeouC9ad',
        'corncheesecombo.png' => '1p9luAqCRI0ntTjaKjzgmnb_CVMx6GRex',
        'fries.jpg' => '1GtoHjzaaS8yB-Qt5N3EvGGRQgqIx8p-O',
        'fries.png' => '1JLkscS8uW4psJC13lfcvbbpoQ5XwBWyL',
        'magicpin.png' => '1Qhlu-qYKgaDE9ofHoyKFcAIFqGRkxND8',
        'minibbites_fries.png' => '1eANwRh29Pm2GlQkwr5rMT7ci1thXSHLS',
        'mumbai_style.jpg' => '1pm_CvH4cPt-E_aGJb-DiJv-PtRW3x1x3',
        'mumbaibbite.png' => '1Oh5Sr626VBApzCmtLKvPz16mFYku9T0G',
        'mumbaistylecombo.png' => '1_HOsxIsh8KmK4Ct3gc1MWUJgm-eqHtxO',
        'Ola.png' => '11Mt_Esij0nJZiLj-WOfoS8W5Vr3eNtK6',
        'peri_peri_cheese_fries.png' => '1os_nEKFGf-iDqxUImaLueH-bNdwhy_V8',
        'periperi_fries.jpg' => '1Ssgtqc3WKhi3V0LR3_dmdpRTEfuP1eZJ',
        'peripericheese_fries.png' => '14_p9IaIMtjnb3wVhHuUN_BEf1PurQt9f',
        'peripericheese.png' => '1F8l6ZP0q2Fn4tpI_CbDRRsF5kdU7lyWs',
        'periperifries.png' => '1fy0ZH1tSr01SmTXxTT-yWFWjsWAAgLT0',
        'swiggy.png' => '1Fk8kfsOYyugDh10d1oSW-Xt3jYclVDBu',
        'tandoori.jpg' => '1-ULJMkKltJFTDubfFPrg7bQByoRMyBGX',
        'tandooribbite.png' => '1Fx-zrDsAJL8rDpWOXbyUgEmIs3jmiYjs',
        'tandooripaneercombo.png' => '1myN9iIe83lIk5uSruk8Htyi0hTJgr4en',
        'threemini.jpg' => '12ltI68hoiOEQ54-ozEv1Es6vXGXFMJO3',
        'veggie.jpg' => '1MwSd4JwdTK7NMhV6lY0wfEaV2Z9UZhU-',
        'veggiebbite.png' => '1tJhYldAiZSKltpI1bzmIktIUnjDat8T7',
        'veggiecombo.png' => '1r1SbyTfKHNk8mthq6ulIdySKL7T6ez9Z',
        'white_logo.png' => '1AA9ARKejXj5ftv6_B-gOiZ6M2ky6zt7v',
        'zomato.png' => '1KvKt46hbeUib0wodLp1UyBAe6K1Jrvvk',

        // menus
        '1753619185-mumbaibbite.png' => '1gse06T-KvnnUj3FodOLnq4-rdkbgWPDB',
        '1754471965-chilligarlicbbite.png' => '1o9BIyHOVMaRCoA9nQDbuMcYE4q47Xsmy',
        '1754472206-veggiebbite.png' => '1rGXH2-6YAgN2Rl6L2KV4RjA9So-_yFUW',
        '1754472328-cheesecornbbite.png' => '1QHmlZ50TUsrfkPGXvmhtqI_24ARw9H32',
        '1754472482-chillicheesebbite.png' => '19ln2cd8UPyxyheOydtWJmhniONemvzbp',
        '1754472564-tandooribbite.png' => '1ogen17qBqcPg3ZHRDRMYaNKIljfpwpy3',
        '1754472831-fries.png' => '1FqB5PYngfKgSeaXMSoEzFjpepLj1wN6n',
        '1754472907-periperifries.png' => '1y0zuTSFLkytv7jmWqbtNKkZA-hvXCMFK',
        '1754473033-peripericheese.png' => '197uacXvCc1JbzU3zkNhN0n7dMjErz9ga',
        '1754473186-mumbaistylecombo.png' => '1QEfBU6CH7eHHGfZqNyq4yv0pcIHk7d0y',
        '1754473226-chilligarliccombo.png' => '1RkgmFmKr9fj3kIgEfXpw1dhH7AKBeWjf',
        '1754473263-veggiecombo.png' => '1fcjn2WyigCsx8iQmScWWT2SOXKapTXlA',
        '1754473294-corncheesecombo.png' => '1Gt50gbdr3zkIkzDJ-6VABEZ5ly3Vo5FP',
        '1754473336-cheesechillicombo.png' => '1XIcA-UybrOk5reJGYxZ3muOHeJzaoSKz',
        '1754473364-tandooripaneercombo.png' => '1zxTbi1tBAcSG1LaLhL0cscN3-TAcG-XG',
        '1754480175-mumbaibbite.png' => '19tFIccVBTfRO7jLkDhuUXYm-jDdgFcPW',
        '1754480186-mumbaibbite.png' => '1QuKynZJtiRvkGag5ZG-JAwFjqpYUXlOA',
        '1754480227-chilligarlicbbite.png' => '1xbpOGrfNCyVokNG6SaCdXKvLIpQROyuA',
        '1754480272-veggiebbite.png' => '1zup_fJndIpYzykPAXjUqlzbk__7fmCWN',
        '1754480308-cheesecornbbite.png' => '13kXsM3r48j87JEN4oxQ_GVnnWqG_nHMs',
        '1754480341-chillicheesebbite.png' => '1YJ3CPgQa-WEaireFGSZlfXzj9AFo7JU4',
        '1754480382-tandooribbite.png' => '1WOsiXcB0OKK6DSzQfIvTPLJZl2M-2qde',
        '1754480446-fries.png' => '1A4wcklJK3h5wq-1amne1TfNG66UhFVrN',
        '1754480481-periperifries.png' => '1cqj9XN_6bKM5dSTaKbRJin6NSxHDf5eO',
        '1754480525-peripericheese.png' => '1XlDhu0B1x2l1NPnmDzo6MuTCJyzDTItH',
        '1754480623-mumbaistylecombo.png' => '1YZj94TT5jzYuj4umgmzJh3NkFgkg1dLc',
        '1754480667-chilligarliccombo.png' => '1CJQlsFordvzZeWqfaU0vX5qyPsSnaCZs',
        '1754480707-veggiecombo.png' => '1DqSNgXWqX7IS_1YYgS643W9FAESBlKY-',
        '1754480747-corncheesecombo.png' => '1IR5-RLolBsrSLGAcwBLw5TqOuKuKakUp',
        '1754480845-cheesechillicombo.png' => '15KCOWCnFaI9qOConm5JyNZuSeZ_jGoqc',
        '1754480925-tandooripaneercombo.png' => '1eq0CC71t-dkI972iK2ccHIgPnW4PoVTE',

        // profile-picture
        'TUPdbVPMhvTdbGhjyhl6tv1aVvIlxzLl5C58iI6r.png' => '1VuyXtmgSzfIyDKfC-o2XkZ0tQLlpNoIl',

        // videos
        'banner.mp4' => '17YKjdBRCnEZTnD1wgpb_eZPfSMs9jyYN',
    ];

    /**
     * Get Google Drive CDN direct URL for any file path or filename.
     */
    public static function url(?string $path): string
    {
        if (empty($path)) {
            return '';
        }

        // If it's already an absolute URL, return as is
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        $filename = basename($path);

        if (isset(self::$fileMap[$filename])) {
            $id = self::$fileMap[$filename];
            // If video, use direct download link; for images use Google high-speed CDN
            if (str_ends_with(strtolower($filename), '.mp4') || str_ends_with(strtolower($filename), '.webm')) {
                return "https://drive.google.com/uc?export=download&id={$id}";
            }
            return "https://lh3.googleusercontent.com/d/{$id}";
        }

        // Fallback to standard asset
        $cleanPath = ltrim(preg_replace('/^storage\//', '', $path), '/');
        return asset('storage/' . $cleanPath);
    }
}
