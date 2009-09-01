<?php
// $Id: transtab_unicode_bibtex.inc.php,v 1.1.4.2 2008/06/09 12:39:13 rjerome Exp $
// Copyright:  Matthias Steffens 
//             This code is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY.
//             Please see the GNU General Public License for more details.
// File:       ./includes/transtab_unicode_bibtex.inc.php
// Created:    28-May-06, 12:39
// Modified:   13-Aug-06, 13:55

// This is a translation table for best-effort conversion from Unicode to LaTeX/BibTeX entities. It contains a comprehensive list of substitution strings for Unicode characters,
// which can be used with the 'T1' font encoding. Uses commands from the 'textcomp' package. Characters that can't be matched are converted to ASCII equivalents.
// Adopted from 'transtab' by Markus Kuhn
// (transtab.utf v1.8 2000-10-12 11:01:28+01 mgk25 Exp); see <http://www.cl.cam.ac.uk/~mgk25/unicode.html> for more info about Unicode and transtab.

$transtab_unicode_bibtex = array (

  "(?<!\\\\)#" => '$\\#$',
  "(?<!\\\\)%" => "\\%",
  "(?<!\\\\)'" => "{\\textquoteright}",
  "(?<!\\\\)`" => "{\\textquoteleft}",
  " " => "~",
  "¡" => "{\\textexclamdown}",
  "¢" => "{\\textcent}",
  "£" => "{\\textsterling}",
  "¥" => "{\\textyen}",
  "¦" => "{\\textbrokenbar}",
  "§" => "{\\textsection}",
  "¨" => "{\\textasciidieresis}",
  "©" => "{\\textcopyright}",
  "ª" => "{\\textordfeminine}",
  "«" => "{\\guillemotleft}",
  "¬" => "{\\textlnot}",
  "­" => "-",
  "®" => "{\\textregistered}",
  "¯" => "{\\textasciimacron}",
  "°" => "{\\textdegree}",
  "±" => "{\\textpm}",
  "²" => "{\\texttwosuperior}",
  "³" => "{\\textthreesuperior}",
  "´" => "{\\textasciiacute}",
  "µ" => "{\\textmu}",
  "¶" => "{\\textparagraph}",
  "·" => "{\\textperiodcentered}",
  "¸" => "{\\c\\ }",
  "¹" => "{\\textonesuperior}",
  "º" => "{\\textordmasculine}",
  "»" => "{\\guillemotright}",
  "¼" => "{\\textonequarter}",
  "½" => "{\\textonehalf}",
  "¾" => "{\\textthreequarters}",
  "¿" => "{\\textquestiondown}",
  "À" => "{\\`A}",
  "Á" => "{\\'A}",
  "Â" => "{\\^A}",
  "Ã" => "{\\~A}",
  "Ä" => "{\\\"A}",
  "Å" => "{\\r A}",
  "Æ" => "{\\AE}",
  "Ç" => "{\\c C}",
  "È" => "{\\`E}",
  "É" => "{\\'E}",
  "Ê" => "{\\^E}",
  "Ë" => "{\\\"E}",
  "Ì" => "{\\`I}",
  "Í" => "{\\'I}",
  "Î" => "{\\^I}",
  "Ï" => "{\\\"I}",
  "Ð" => "{\\DH}",
  "Ñ" => "{\\~N}",
  "Ò" => "{\\`O}",
  "Ó" => "{\\'O}",
  "Ô" => "{\\^O}",
  "Õ" => "{\\~O}",
  "Ö" => "{\\\"O}",
  "×" => "{\\texttimes}",
  "Ø" => "{\\O}",
  "Ù" => "{\\`U}",
  "Ú" => "{\\'U}",
  "Û" => "{\\^U}",
  "Ü" => "{\\\"U}",
  "Ý" => "{\\'Y}",
  "Þ" => "{\\TH}",
  "ß" => "{\\ss}",
  "à" => "{\\`a}",
  "á" => "{\\'a}",
  "â" => "{\\^a}",
  "ã" => "{\\~a}",
  "ä" => "{\\\"a}",
  "å" => "{\\r a}",
  "æ" => "{\\ae}",
  "ç" => "{\\c c}",
  "è" => "{\\`e}",
  "é" => "{\\'e}",
  "ê" => "{\\^e}",
  "ë" => "{\\\"e}",
  "ì" => "{\\`\\i}",
  "í" => "{\\'\\i}",
  "î" => "{\\^\\i}",
  "ï" => "{\\\"\\i}",
  "ð" => "{\\dh}",
  "ñ" => "{\\~n}",
  "ò" => "{\\`o}",
  "ó" => "{\\'o}",
  "ô" => "{\\^o}",
  "õ" => "{\\~o}",
  "ö" => "{\\\"o}",
  "÷" => "{\\textdiv}",
  "ø" => "{\\o}",
  "ù" => "{\\`u}",
  "ú" => "{\\'u}",
  "û" => "{\\^u}",
  "ü" => "{\\\"u}",
  "ý" => "{\\'y}",
  "þ" => "{\\th}",
  "ÿ" => "{\\\"y}",
  "Ā" => "A",
  "ā" => "{\\={a}}",
  "Ă" => "{\\u A}",
  "ă" => "{\\u a}",
  "Ą" => "{\\k A}",
  "ą" => "{\\k a}",
  "Ć" => "{\\'C}",
  "ć" => "{\\'c}",
  "Ĉ" => "Ch",
  "ĉ" => "ch",
  "Ċ" => "C",
  "ċ" => "c",
  "Č" => "{\\v C}",
  "č" => "{\\v c}",
  "Ď" => "{\\v D}",
  "ď" => "{\\v d}",
  "Đ" => "{\\DJ}",
  "đ" => "{\\dj}",
  "Ē" => "E",
  "ē" => "e",
  "Ĕ" => "E",
  "ĕ" => "e",
  "Ė" => "E",
  "ė" => "e",
  "Ę" => "{\\k E}",
  "ę" => "{\\k e}",
  "Ě" => "{\\v E}",
  "ě" => "{\\v e}",
  "Ĝ" => "Gh",
  "ĝ" => "gh",
  "Ğ" => "{\\u G}",
  "ğ" => "{\\u g}",
  "Ġ" => "G",
  "ġ" => "g",
  "Ģ" => "G",
  "ģ" => "g",
  "Ĥ" => "Hh",
  "ĥ" => "hh",
  "Ħ" => "H",
  "ħ" => "h",
  "Ĩ" => "I",
  "ĩ" => "i",
  "Ī" => "I",
  "ī" => "i",
  "Ĭ" => "I",
  "ĭ" => "i",
  "Į" => "I",
  "į" => "i",
  "İ" => "{\\.I}",
  "ı" => "{\\i}",
  "Ĳ" => "IJ",
  "ĳ" => "ij",
  "Ĵ" => "Jh",
  "ĵ" => "jh",
  "Ķ" => "K",
  "ķ" => "k",
  "ĸ" => "k",
  "Ĺ" => "{\\'L}",
  "ĺ" => "{\\'l}",
  "Ļ" => "L",
  "ļ" => "l",
  "Ľ" => "{\\v L}",
  "ľ" => "{\\v l}",
  "Ŀ" => "L·",
  "ŀ" => "l·",
  "Ł" => "{\\L}",
  "ł" => "{\\l}",
  "Ń" => "{\\'N}",
  "ń" => "{\\'n}",
  "Ņ" => "N",
  "ņ" => "n",
  "Ň" => "{\\v N}",
  "ň" => "{\\v n}",
  "ŉ" => "'n",
  "Ŋ" => "{\\NG}",
  "ŋ" => "{\\ng}",
  "Ō" => "O",
  "ō" => "o",
  "Ŏ" => "O",
  "ŏ" => "o",
  "Ő" => "{\\H O}",
  "ő" => "{\\H o}",
  "Œ" => "{\\OE}",
  "œ" => "{\\oe}",
  "Ŕ" => "{\\'R}",
  "ŕ" => "{\\'r}",
  "Ŗ" => "R",
  "ŗ" => "r",
  "Ř" => "{\\v R}",
  "ř" => "{\\v r}",
  "Ś" => "{\\'S}",
  "ś" => "{\\'s}",
  "Ŝ" => "Sh",
  "ŝ" => "sh",
  "Ş" => "{\\c S}",
  "ş" => "{\\c s}",
  "Š" => "{\\v S}",
  "š" => "{\\v s}",
  "Ţ" => "{\\c T}",
  "ţ" => "{\\c t}",
  "Ť" => "{\\v T}",
  "ť" => "{\\v t}",
  "Ŧ" => "T",
  "ŧ" => "t",
  "Ũ" => "U",
  "ũ" => "u",
  "Ū" => "U",
  "ū" => "u",
  "Ŭ" => "U",
  "ŭ" => "u",
  "Ů" => "{\\r U}",
  "ů" => "{\\r u}",
  "Ű" => "{\\H U}",
  "ű" => "{\\H u}",
  "Ų" => "U",
  "ų" => "u",
  "Ŵ" => "W",
  "ŵ" => "w",
  "Ŷ" => "Y",
  "ŷ" => "y",
  "Ÿ" => "{\\\"Y}",
  "Ź" => "{\\'Z}",
  "ź" => "{\\'z}",
  "Ż" => "{\\.Z}",
  "ż" => "{\\.z}",
  "Ž" => "{\\v Z}",
  "ž" => "{\\v z}",
  "ſ" => "s",
  "ƒ" => "{\\textflorin}",
  "Ș" => "S",
  "ș" => "s",
  "Ț" => "T",
  "ț" => "t",
  "ʹ" => "'",
  "ʻ" => "'",
  "ʼ" => "'",
  "ʽ" => "'",
  "ˆ" => "{\\textasciicircum}",
  "ˈ" => "'",
  "ˉ" => "-",
  "ˌ" => ",",
  "ː" => ":",
  "˚" => "o",
  "˜" => "\\~{}",
  "˝" => "{\\textacutedbl}",
  "ʹ" => "'",
  "͵" => ",",
  ";" => ";",
  "Ḃ" => "B",
  "ḃ" => "b",
  "Ḋ" => "D",
  "ḋ" => "d",
  "Ḟ" => "F",
  "ḟ" => "f",
  "Ṁ" => "M",
  "ṁ" => "m",
  "Ṗ" => "P",
  "ṗ" => "p",
  "Ṡ" => "S",
  "ṡ" => "s",
  "Ṫ" => "T",
  "ṫ" => "t",
  "Ẁ" => "W",
  "ẁ" => "w",
  "Ẃ" => "W",
  "ẃ" => "w",
  "Ẅ" => "W",
  "ẅ" => "w",
  "Ỳ" => "Y",
  "ỳ" => "y",
  " " => " ",
  " " => "  ",
  " " => " ",
  " " => "  ",
  " " => " ",
  " " => " ",
  " " => " ",
  " " => " ",
  " " => " ",
  " " => " ",
  "‐" => "-",
  "‑" => "-",
  "‒" => "-",
  "–" => "{\\textendash}",
  "—" => "{\\textemdash}",
  "―" => "--",
  "‖" => "{\\textbardbl}",
  "‗" => "{\\textunderscore}",
  "‘" => "{\\textquoteleft}",
  "’" => "{\\textquoteright}",
  "‚" => "{\\quotesinglbase}",
  "‛" => "'",
  "“" => "{\\textquotedblleft}",
  "”" => "{\\textquotedblright}",
  "„" => "{\\quotedblbase}",
  "‟" => "\"",
  "†" => "{\\textdagger}",
  "‡" => "{\\textdaggerdbl}",
  "•" => "{\\textbullet}",
  "‣" => ">",
  "․" => ".",
  "‥" => "..",
  "…" => "{\\textellipsis}",
  "‧" => "-",
  " " => " ",
  "‰" => "{\\textperthousand}",
  "′" => "'",
  "″" => "\"",
  "‴" => "'''",
  "‵" => "`",
  "‶" => "``",
  "‷" => "```",
  "‹" => "{\\guilsinglleft}",
  "›" => "{\\guilsinglright}",
  "‼" => "!!",
  "‾" => "-",
  "⁃" => "-",
  "⁄" => "{\\textfractionsolidus}",
  "⁈" => "?!",
  "⁉" => "!?",
  "⁊" => "7",
  "⁰" => '$^{0}$',
  "⁴" => '$^{4}$',
  "⁵" => '$^{5}$',
  "⁶" => '$^{6}$',
  "⁷" => '$^{7}$',
  "⁸" => '$^{8}$',
  "⁹" => '$^{9}$',
  "⁺" => '$^{+}$',
  "⁻" => '$^{-}$',
  "⁼" => '$^{=}$',
  "⁽" => '$^{(}$',
  "⁾" => '$^{)}$',
  "ⁿ" => '$^{n}$',
  "₀" => '$_{0}$',
  "₁" => '$_{1}$',
  "₂" => '$_{2}$',
  "₃" => '$_{3}$',
  "₄" => '$_{4}$',
  "₅" => '$_{5}$',
  "₆" => '$_{6}$',
  "₇" => '$_{7}$',
  "₈" => '$_{8}$',
  "₉" => '$_{9}$',
  "₊" => '$_{+}$',
  "₋" => '$_{-}$',
  "₌" => '$_{=}$',
  "₍" => '$_{(}$',
  "₎" => '$_{)}$',
  "€" => "{\\texteuro}",
  "℀" => "a/c",
  "℁" => "a/s",
  "℃" => "{\\textcelsius}",
  "℅" => "c/o",
  "℆" => "c/u",
  "℉" => "F",
  "ℓ" => "l",
  "№" => "{\\textnumero}",
  "℗" => "{\\textcircledP}",
  "℠" => "{\\textservicemark}",
  "℡" => "TEL",
  "™" => "{\\texttrademark}",
  "Ω" => "{\\textohm}",
  "K" => "K",
  "Å" => "A",
  "℮" => "{\\textestimated}",
  "⅓" => " 1/3",
  "⅔" => " 2/3",
  "⅕" => " 1/5",
  "⅖" => " 2/5",
  "⅗" => " 3/5",
  "⅘" => " 4/5",
  "⅙" => " 1/6",
  "⅚" => " 5/6",
  "⅛" => " 1/8",
  "⅜" => " 3/8",
  "⅝" => " 5/8",
  "⅞" => " 7/8",
  "⅟" => " 1/",
  "Ⅰ" => "I",
  "Ⅱ" => "II",
  "Ⅲ" => "III",
  "Ⅳ" => "IV",
  "Ⅴ" => "V",
  "Ⅵ" => "VI",
  "Ⅶ" => "VII",
  "Ⅷ" => "VIII",
  "Ⅸ" => "IX",
  "Ⅹ" => "X",
  "Ⅺ" => "XI",
  "Ⅻ" => "XII",
  "Ⅼ" => "L",
  "Ⅽ" => "C",
  "Ⅾ" => "D",
  "Ⅿ" => "M",
  "ⅰ" => "i",
  "ⅱ" => "ii",
  "ⅲ" => "iii",
  "ⅳ" => "iv",
  "ⅴ" => "v",
  "ⅵ" => "vi",
  "ⅶ" => "vii",
  "ⅷ" => "viii",
  "ⅸ" => "ix",
  "ⅹ" => "x",
  "ⅺ" => "xi",
  "ⅻ" => "xii",
  "ⅼ" => "l",
  "ⅽ" => "c",
  "ⅾ" => "d",
  "ⅿ" => "m",
  "←" => "{\\textleftarrow}",
  "↑" => "{\\textuparrow}",
  "→" => "{\\textrightarrow}",
  "↓" => "{\\textdownarrow}",
  "↔" => "<->",
  "⇐" => "<=",
  "⇒" => "=>",
  "⇔" => "<=>",
  "−" => "-",
  "∕" => "/",
  "∖" => "\\",
  "∗" => "*",
  "∘" => "o",
  "∙" => ".",
  "∞" => '$\\infty$',
  "∣" => "|",
  "∥" => "||",
  "∶" => ":",
  "∼" => "\\~{}",
  "≠" => "/=",
  "≡" => "=",
  "≤" => "<=",
  "≥" => ">=",
  "≪" => "<<",
  "≫" => ">>",
  "⊕" => "(+)",
  "⊖" => "(-)",
  "⊗" => "(x)",
  "⊘" => "(/)",
  "⊢" => "|-",
  "⊣" => "-|",
  "⊦" => "|-",
  "⊧" => "|=",
  "⊨" => "|=",
  "⊩" => "||-",
  "⋅" => ".",
  "⋆" => "*",
  "⋕" => '$\\#$',
  "⋘" => "<<<",
  "⋙" => ">>>",
  "⋯" => "...",
  "〈" => "{\\textlangle}",
  "〉" => "{\\textrangle}",
  "␀" => "NUL",
  "␁" => "SOH",
  "␂" => "STX",
  "␃" => "ETX",
  "␄" => "EOT",
  "␅" => "ENQ",
  "␆" => "ACK",
  "␇" => "BEL",
  "␈" => "BS",
  "␉" => "HT",
  "␊" => "LF",
  "␋" => "VT",
  "␌" => "FF",
  "␍" => "CR",
  "␎" => "SO",
  "␏" => "SI",
  "␐" => "DLE",
  "␑" => "DC1",
  "␒" => "DC2",
  "␓" => "DC3",
  "␔" => "DC4",
  "␕" => "NAK",
  "␖" => "SYN",
  "␗" => "ETB",
  "␘" => "CAN",
  "␙" => "EM",
  "␚" => "SUB",
  "␛" => "ESC",
  "␜" => "FS",
  "␝" => "GS",
  "␞" => "RS",
  "␟" => "US",
  "␠" => "SP",
  "␡" => "DEL",
  "␣" => "{\\textvisiblespace}",
  "␤" => "NL",
  "␥" => "///",
  "␦" => "?",
  "①" => "(1)",
  "②" => "(2)",
  "③" => "(3)",
  "④" => "(4)",
  "⑤" => "(5)",
  "⑥" => "(6)",
  "⑦" => "(7)",
  "⑧" => "(8)",
  "⑨" => "(9)",
  "⑩" => "(10)",
  "⑪" => "(11)",
  "⑫" => "(12)",
  "⑬" => "(13)",
  "⑭" => "(14)",
  "⑮" => "(15)",
  "⑯" => "(16)",
  "⑰" => "(17)",
  "⑱" => "(18)",
  "⑲" => "(19)",
  "⑳" => "(20)",
  "⑴" => "(1)",
  "⑵" => "(2)",
  "⑶" => "(3)",
  "⑷" => "(4)",
  "⑸" => "(5)",
  "⑹" => "(6)",
  "⑺" => "(7)",
  "⑻" => "(8)",
  "⑼" => "(9)",
  "⑽" => "(10)",
  "⑾" => "(11)",
  "⑿" => "(12)",
  "⒀" => "(13)",
  "⒁" => "(14)",
  "⒂" => "(15)",
  "⒃" => "(16)",
  "⒄" => "(17)",
  "⒅" => "(18)",
  "⒆" => "(19)",
  "⒇" => "(20)",
  "⒈" => "1.",
  "⒉" => "2.",
  "⒊" => "3.",
  "⒋" => "4.",
  "⒌" => "5.",
  "⒍" => "6.",
  "⒎" => "7.",
  "⒏" => "8.",
  "⒐" => "9.",
  "⒑" => "10.",
  "⒒" => "11.",
  "⒓" => "12.",
  "⒔" => "13.",
  "⒕" => "14.",
  "⒖" => "15.",
  "⒗" => "16.",
  "⒘" => "17.",
  "⒙" => "18.",
  "⒚" => "19.",
  "⒛" => "20.",
  "⒜" => "(a)",
  "⒝" => "(b)",
  "⒞" => "(c)",
  "⒟" => "(d)",
  "⒠" => "(e)",
  "⒡" => "(f)",
  "⒢" => "(g)",
  "⒣" => "(h)",
  "⒤" => "(i)",
  "⒥" => "(j)",
  "⒦" => "(k)",
  "⒧" => "(l)",
  "⒨" => "(m)",
  "⒩" => "(n)",
  "⒪" => "(o)",
  "⒫" => "(p)",
  "⒬" => "(q)",
  "⒭" => "(r)",
  "⒮" => "(s)",
  "⒯" => "(t)",
  "⒰" => "(u)",
  "⒱" => "(v)",
  "⒲" => "(w)",
  "⒳" => "(x)",
  "⒴" => "(y)",
  "⒵" => "(z)",
  "Ⓐ" => "(A)",
  "Ⓑ" => "(B)",
  "Ⓒ" => "(C)",
  "Ⓓ" => "(D)",
  "Ⓔ" => "(E)",
  "Ⓕ" => "(F)",
  "Ⓖ" => "(G)",
  "Ⓗ" => "(H)",
  "Ⓘ" => "(I)",
  "Ⓙ" => "(J)",
  "Ⓚ" => "(K)",
  "Ⓛ" => "(L)",
  "Ⓜ" => "(M)",
  "Ⓝ" => "(N)",
  "Ⓞ" => "(O)",
  "Ⓟ" => "(P)",
  "Ⓠ" => "(Q)",
  "Ⓡ" => "(R)",
  "Ⓢ" => "(S)",
  "Ⓣ" => "(T)",
  "Ⓤ" => "(U)",
  "Ⓥ" => "(V)",
  "Ⓦ" => "(W)",
  "Ⓧ" => "(X)",
  "Ⓨ" => "(Y)",
  "Ⓩ" => "(Z)",
  "ⓐ" => "(a)",
  "ⓑ" => "(b)",
  "ⓒ" => "(c)",
  "ⓓ" => "(d)",
  "ⓔ" => "(e)",
  "ⓕ" => "(f)",
  "ⓖ" => "(g)",
  "ⓗ" => "(h)",
  "ⓘ" => "(i)",
  "ⓙ" => "(j)",
  "ⓚ" => "(k)",
  "ⓛ" => "(l)",
  "ⓜ" => "(m)",
  "ⓝ" => "(n)",
  "ⓞ" => "(o)",
  "ⓟ" => "(p)",
  "ⓠ" => "(q)",
  "ⓡ" => "(r)",
  "ⓢ" => "(s)",
  "ⓣ" => "(t)",
  "ⓤ" => "(u)",
  "ⓥ" => "(v)",
  "ⓦ" => "(w)",
  "ⓧ" => "(x)",
  "ⓨ" => "(y)",
  "ⓩ" => "(z)",
  "⓪" => "(0)",
  "─" => "-",
  "━" => "=",
  "│" => "|",
  "┃" => "|",
  "┄" => "-",
  "┅" => "=",
  "┆" => "|",
  "┇" => "|",
  "┈" => "-",
  "┉" => "=",
  "┊" => "|",
  "┋" => "|",
  "┌" => "+",
  "┍" => "+",
  "┎" => "+",
  "┏" => "+",
  "┐" => "+",
  "┑" => "+",
  "┒" => "+",
  "┓" => "+",
  "└" => "+",
  "┕" => "+",
  "┖" => "+",
  "┗" => "+",
  "┘" => "+",
  "┙" => "+",
  "┚" => "+",
  "┛" => "+",
  "├" => "+",
  "┝" => "+",
  "┞" => "+",
  "┟" => "+",
  "┠" => "+",
  "┡" => "+",
  "┢" => "+",
  "┣" => "+",
  "┤" => "+",
  "┥" => "+",
  "┦" => "+",
  "┧" => "+",
  "┨" => "+",
  "┩" => "+",
  "┪" => "+",
  "┫" => "+",
  "┬" => "+",
  "┭" => "+",
  "┮" => "+",
  "┯" => "+",
  "┰" => "+",
  "┱" => "+",
  "┲" => "+",
  "┳" => "+",
  "┴" => "+",
  "┵" => "+",
  "┶" => "+",
  "┷" => "+",
  "┸" => "+",
  "┹" => "+",
  "┺" => "+",
  "┻" => "+",
  "┼" => "+",
  "┽" => "+",
  "┾" => "+",
  "┿" => "+",
  "╀" => "+",
  "╁" => "+",
  "╂" => "+",
  "╃" => "+",
  "╄" => "+",
  "╅" => "+",
  "╆" => "+",
  "╇" => "+",
  "╈" => "+",
  "╉" => "+",
  "╊" => "+",
  "╋" => "+",
  "╌" => "-",
  "╍" => "=",
  "╎" => "|",
  "╏" => "|",
  "═" => "=",
  "║" => "|",
  "╒" => "+",
  "╓" => "+",
  "╔" => "+",
  "╕" => "+",
  "╖" => "+",
  "╗" => "+",
  "╘" => "+",
  "╙" => "+",
  "╚" => "+",
  "╛" => "+",
  "╜" => "+",
  "╝" => "+",
  "╞" => "+",
  "╟" => "+",
  "╠" => "+",
  "╡" => "+",
  "╢" => "+",
  "╣" => "+",
  "╤" => "+",
  "╥" => "+",
  "╦" => "+",
  "╧" => "+",
  "╨" => "+",
  "╩" => "+",
  "╪" => "+",
  "╫" => "+",
  "╬" => "+",
  "╭" => "+",
  "╮" => "+",
  "╯" => "+",
  "╰" => "+",
  "╱" => "/",
  "╲" => "\\",
  "╳" => "X",
  "╼" => "-",
  "╽" => "|",
  "╾" => "-",
  "╿" => "|",
  "○" => "o",
  "◦" => "{\\textopenbullet}",
  "★" => "*",
  "☆" => "*",
  "☒" => "X",
  "☓" => "X",
  "☹" => ":-(",
  "☺" => ":-)",
  "☻" => "(-:",
  "♭" => "b",
  "♯" => '$\\#$',
  "✁" => '$\\%<$',
  "✂" => '$\\%<$',
  "✃" => '$\\%<$',
  "✄" => '$\\%<$',
  "✌" => "V",
  "✓" => "v",
  "✔" => "V",
  "✕" => "x",
  "✖" => "x",
  "✗" => "X",
  "✘" => "X",
  "✙" => "+",
  "✚" => "+",
  "✛" => "+",
  "✜" => "+",
  "✝" => "+",
  "✞" => "+",
  "✟" => "+",
  "✠" => "+",
  "✡" => "*",
  "✢" => "+",
  "✣" => "+",
  "✤" => "+",
  "✥" => "+",
  "✦" => "+",
  "✧" => "+",
  "✩" => "*",
  "✪" => "*",
  "✫" => "*",
  "✬" => "*",
  "✭" => "*",
  "✮" => "*",
  "✯" => "*",
  "✰" => "*",
  "✱" => "*",
  "✲" => "*",
  "✳" => "*",
  "✴" => "*",
  "✵" => "*",
  "✶" => "*",
  "✷" => "*",
  "✸" => "*",
  "✹" => "*",
  "✺" => "*",
  "✻" => "*",
  "✼" => "*",
  "✽" => "*",
  "✾" => "*",
  "✿" => "*",
  "❀" => "*",
  "❁" => "*",
  "❂" => "*",
  "❃" => "*",
  "❄" => "*",
  "❅" => "*",
  "❆" => "*",
  "❇" => "*",
  "❈" => "*",
  "❉" => "*",
  "❊" => "*",
  "❋" => "*",
  "ﬀ" => "ff",
  "ﬁ" => "fi",
  "ﬂ" => "fl",
  "ﬃ" => "ffi",
  "ﬄ" => "ffl",
  "ﬅ" => "st",
  "ﬆ" => "st"
);

