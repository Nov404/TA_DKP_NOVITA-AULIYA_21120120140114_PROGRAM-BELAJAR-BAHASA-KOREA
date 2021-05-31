<?php

// Array huruf lokal
$HurufLocals = [
    ['ㅏ', 'A'],
    ['ㅑ', 'Ya'],
    ['ㅓ', 'Eo'],
    ['ㅕ', 'Yeo'],
    ['ㅗ', 'O'],
    ['ㅛ', 'Yo'],
    ['ㅜ', 'U'],
    ['ㅠ', 'Yu'],
    ['ㅡ', 'Eu'],
    ['ㅣ', 'I'],
    ['ㅐ', 'Ae'],
    ['ㅒ', 'Yae'],
    ['ㅔ', 'E'],
    ['ㅖ', 'Ye'],
    ['ㅘ', 'Wa'],
    ['ㅙ', 'Wae'],
    ['ㅚ', 'Oe'],
    ['ㅞ', 'We'],
    ['ㅝ', 'Wo'],
    ['ㅟ', 'Wi'],
    ['ㅢ', 'Ui/Yi']
];

// Array huruf konsonan
$HurufKonsonans = [
    ['ㄱ', 'G/K'],
    ['ㄴ', 'N'],
    ['ㄷ', 'D'],
    ['ㄹ', 'R/L'],
    ['ㅁ', 'M'],
    ['ㅂ', 'B/P'],
    ['ㅅ', 'S'],
    ['ㅇ', '-Ng'],
    ['ㅈ', 'J/C'],
    ['ㅋ', 'Kh'],
    ['ㅌ', 'T'],
    ['ㅍ', 'P'],
    ['ㅊ', 'Ch'],
    ['ㅎ', 'H']
];

// Array huruf konsonan Double
$HurufKonsonansDouble = [
    ['ㄲ', 'GG/KK'],   
    ['ㄸ', 'DD/TT'],    
    ['ㅃ', 'BB/PP'],
    ['ㅆ', 'SS'],    
    ['ㅉ', 'JJ'],    
];

// Array hruf konsonan
$HurufBatchims = [
    ['ㅂ (B)', '어렵다 (Eo-ryeob-da)', 'Susah', '어렵다 berubah menjadi 어려워요 (Eo-ryeo-wo-yo). ㅂ hilang diganti dengan 워 (Wo).'],   
    ['ㄹ (R)', '만들다 (Man-deul-da)', 'Membuat', '만들다 berubah menjadi 만듭니다 (Man-deub-ni-da). 
    Batchim ㄹ akan hilang jika bertemu dengan huruf ㄴ, ㅂ, ㅅ, dan 으.'],    
    ['ㅎ (H)
    ㅇ (-Ng)', '좋아 (Jo-a)', 'Suka', 'Jika terletak di antara huruf lain, ㅎ dan ㅇ tidak dibaca.' ],
    ['ㄱ (K)
    ㄷ (D)    
    ㅂ (B)    
    ㅈ (J)', '많다 (Man-ta)', 'Banyak', 'Huruf ㄱ, ㄷ, ㅂ, ㅈ jika berada sebelum huruf ㅎ maka huruf ㅎ hilang.'],    
    ['ㄴ (N)
    ㄹ (R)', '설날 (Seol-nal)', 'Tahun baru Korea', 'Huruf ㄴ jika bertemu dengan ㄹ makan ㄴ dibaca sebagai ㄹ.
    Sehingga 설날 (Seol-nal)  menjadi 설랄 (Seol-lal). '],  
    ['ㅂ (B)
    ㅎ (H)', '답답해 (Dap-da-pae)','Tidak sabar', 'ㅂ jika bertemu dengan ㅎ hilang dan dibaca menjadi ㅍ. 
    Sehingga 답답해 (Dap-dap-hae) dibaca dibaca 답다패 (Dap-da-pae).'], 
    ['ㄷ (D)
    ㅌ (T)', '같이 (Ga-chi)', 'Bersama', 'ㄷ dan ㅌ jika bertemu dengan 이 (I) dibaca ㅈ (J) untuk ㄷ dan ㅊ (Ch) untuk ㅌ.
    Sehingga 같이 (Gat-i) dibaca 가치 (Ga-chi).'],   
];

// array angka korea 1 - 10
$angkaKoreans = [
    [0, '공', 'gong', '영', 'yeong'],
    [1, '하나', 'hana', '일', 'il'],
    [2, '둘', 'dul', '이', 'i'],
    [3, '셋', 'set', '삼', 'sam'],
    [4, '넷', 'net', '사', 'sa'],
    [5, '다섯', 'daseot', '오', 'o'],
    [6, '여섯', 'yeseot', '육', 'yuk'],
    [7, '일곱', 'ilgop', '칠', 'chil'],
    [8, '여덟', 'yeodeol', '팔', 'pal'],
    [9, '아홉', 'ahop', '구', 'gu'],
    [10, '열', 'yeol', '십', 'ship']
];