<?php
// This file is auto-generated. Do not edit!
return array('digits-ordinal'=>array('-x'=>array('rule'=>'−>>'),'integer'=>array(array('rule'=>'=#,##0=ú'))),'%lenient-parse'=>array('integer'=>array(array('rule'=>'& \' \' , \',\' '))),'%2d-year'=>array('integer'=>array(0=>array('rule'=>'agus =%spellout-numbering='),10=>array('rule'=>'=%%spellout-numbering-no-a='))),'spellout-numbering-year'=>array('-x'=>array('rule'=>'míneas >>'),'x.x'=>array('rule'=>'=0.0='),'integer'=>array(0=>array('rule'=>'=%spellout-numbering='),1000=>array('rule'=>'<%%spellout-numbering-no-a< >%%2d-year>','radix'=>100),10000=>array('rule'=>'=%spellout-numbering='))),'%spellout-numbering-no-a'=>array('integer'=>array(0=>array('rule'=>'náid'),1=>array('rule'=>'aon'),2=>array('rule'=>'dó'),3=>array('rule'=>'trí'),4=>array('rule'=>'ceathair'),5=>array('rule'=>'cúig'),6=>array('rule'=>'sé'),7=>array('rule'=>'seacht'),8=>array('rule'=>'ocht'),9=>array('rule'=>'naoi'),10=>array('rule'=>'deich'),11=>array('rule'=>'>> déag'),12=>array('rule'=>'>> dhéag'),13=>array('rule'=>'>> déag'),20=>array('rule'=>'=%spellout-numbering='))),'spellout-numbering'=>array('-x'=>array('rule'=>'míneas >>'),'x.x'=>array('rule'=>'<< pointe >>'),'integer'=>array(0=>array('rule'=>'a náid'),1=>array('rule'=>'a haon'),2=>array('rule'=>'a dó'),3=>array('rule'=>'a trí'),4=>array('rule'=>'a ceathair'),5=>array('rule'=>'a cúig'),6=>array('rule'=>'a sé'),7=>array('rule'=>'a seacht'),8=>array('rule'=>'a hocht'),9=>array('rule'=>'a naoi'),10=>array('rule'=>'a deich'),11=>array('rule'=>'>> déag'),12=>array('rule'=>'>> dhéag'),13=>array('rule'=>'>> déag'),20=>array('rule'=>'fiche[ >>]'),30=>array('rule'=>'tríocha[ >>]'),40=>array('rule'=>'daichead[ >>]'),50=>array('rule'=>'caoga[ >>]'),60=>array('rule'=>'seasca[ >>]'),70=>array('rule'=>'seachtó[ >>]'),80=>array('rule'=>'ochtó[ >>]'),90=>array('rule'=>'nócha[ >>]'),100=>array('rule'=>'<%%hundreds<[>%%is-number>]'),1000=>array('rule'=>'<%%thousands<[, >%spellout-numbering>]'),1000000=>array('rule'=>'<%%millions<[, >%spellout-numbering>]'),1000000000=>array('rule'=>'<%%billions<[, >%spellout-numbering>]'),1000000000000=>array('rule'=>'<%%trillions<[, >%spellout-numbering>]'),1000000000000000=>array('rule'=>'<%%quadrillions<[, >%spellout-numbering>]'),1000000000000000000=>array('rule'=>'=#,##0='))),'%is-number'=>array('integer'=>array(array('rule'=>' is =%spellout-numbering='),array('rule'=>' =%spellout-numbering='))),'%is-numberp'=>array('integer'=>array(array('rule'=>' is =%%numberp='),array('rule'=>' =%%numberp='))),'%numberp'=>array('integer'=>array(0=>array('rule'=>'=%%spellout-cardinal-prefixpart='),12=>array('rule'=>'dó dhéag'),13=>array('rule'=>'=%%spellout-cardinal-prefixpart= déag'),20=>array('rule'=>'=%%spellout-cardinal-prefixpart='))),'spellout-cardinal'=>array('integer'=>array(array('rule'=>'=%spellout-numbering='))),'%spellout-cardinal-prefixpart'=>array('integer'=>array(0=>array('rule'=>'náid'),1=>array('rule'=>'aon'),2=>array('rule'=>'dhá'),3=>array('rule'=>'trí'),4=>array('rule'=>'ceithre'),5=>array('rule'=>'cúig'),6=>array('rule'=>'sé'),7=>array('rule'=>'seacht'),8=>array('rule'=>'ocht'),9=>array('rule'=>'naoi'),10=>array('rule'=>'deich'),11=>array('rule'=>'>>'),20=>array('rule'=>'fiche[ is >>]'),30=>array('rule'=>'tríocha[ is >>]'),40=>array('rule'=>'daichead[ is >>]'),50=>array('rule'=>'caoga[ is >>]'),60=>array('rule'=>'seasca[ is >>]'),70=>array('rule'=>'seachtó[ is >>]'),80=>array('rule'=>'ochtó[ is >>]'),90=>array('rule'=>'nócha[ is >>]'),100=>array('rule'=>'<%%hundreds<[>%%is-numberp>]'),1000=>array('rule'=>'<%%thousands<[, >%%numberp>]'),1000000=>array('rule'=>'<%%millions<[, >%%numberp>]'),1000000000=>array('rule'=>'<%%billions<[, >%%numberp>]'),1000000000000=>array('rule'=>'<%%trillions<[, >%%numberp>]'),1000000000000000=>array('rule'=>'<%%quadrillions<[, >%%numberp>]'),1000000000000000000=>array('rule'=>'=#,##0='))),'%is'=>array('integer'=>array(0=>array('rule'=>' is'),1=>array('rule'=>''),10=>array('rule'=>'>>'))),'%hundreds'=>array('integer'=>array(1=>array('rule'=>'céad'),2=>array('rule'=>'dhá chéad'),3=>array('rule'=>'trí chéad'),4=>array('rule'=>'ceithre chéad'),5=>array('rule'=>'cúig chéad'),6=>array('rule'=>'sé chéad'),7=>array('rule'=>'seacht gcéad'),8=>array('rule'=>'ocht gcéad'),9=>array('rule'=>'naoi gcéad'))),'%thousands'=>array('integer'=>array(1=>array('rule'=>'míle'),2=>array('rule'=>'=%%spellout-cardinal-prefixpart= =%%thousandp='),100=>array('rule'=>'<%%hundreds<>%%is-thousands>'))),'%thousandp'=>array('integer'=>array(2=>array('rule'=>'=%%thousand='),11=>array('rule'=>'=%%thousand= dhéag'),20=>array('rule'=>'=%%thousand='))),'%thousand'=>array('integer'=>array(0=>array('rule'=>'míle'),1=>array('rule'=>'mhíle'),7=>array('rule'=>'míle'),11=>array('rule'=>'>>'))),'%is-thousands'=>array('integer'=>array(0=>array('rule'=>' =%%thousand='),1=>array('rule'=>' is =%%spellout-cardinal-prefixpart= =%%thousand='),11=>array('rule'=>' is =%%thousands='),20=>array('rule'=>'=%%is= =%%thousands='))),'%millions'=>array('integer'=>array(1=>array('rule'=>'milliún'),2=>array('rule'=>'=%%spellout-cardinal-prefixpart= =%%millionsp='),100=>array('rule'=>'<%%hundreds<>%%is-millions>'))),'%millionsp'=>array('integer'=>array(2=>array('rule'=>'=%%million='),11=>array('rule'=>'=%%million= déag'),20=>array('rule'=>'=%%million='))),'%million'=>array('integer'=>array(0=>array('rule'=>'milliún'),1=>array('rule'=>'mhilliún'),7=>array('rule'=>'milliún'),11=>array('rule'=>'>>'))),'%is-millions'=>array('integer'=>array(0=>array('rule'=>' =%%million='),1=>array('rule'=>' is =%%spellout-cardinal-prefixpart= =%%million='),11=>array('rule'=>' is =%%millions='),20=>array('rule'=>'=%%is= =%%millions='))),'%billions'=>array('integer'=>array(1=>array('rule'=>'billiún'),2=>array('rule'=>'=%%spellout-cardinal-prefixpart= billiún'),11=>array('rule'=>'=%%spellout-cardinal-prefixpart= billiún déag'),20=>array('rule'=>'=%%spellout-cardinal-prefixpart= billiún'),100=>array('rule'=>'<%%hundreds<>%%is-billions>'))),'%is-billions'=>array('integer'=>array(0=>array('rule'=>' billiún'),1=>array('rule'=>' is =%%spellout-cardinal-prefixpart= billiún'),11=>array('rule'=>' is =%%billions='),20=>array('rule'=>'=%%is= =%%billions='))),'%trillions'=>array('integer'=>array(1=>array('rule'=>'thrilliún'),2=>array('rule'=>'=%%spellout-cardinal-prefixpart= =%%trillionsp='),100=>array('rule'=>'<%%hundreds<>%%is-trillions>'))),'%trillionsp'=>array('integer'=>array(2=>array('rule'=>'=%%trillion='),11=>array('rule'=>'=%%trillion= déag'),20=>array('rule'=>'=%%trillion='))),'%trillion'=>array('integer'=>array(0=>array('rule'=>'dtrilliún'),1=>array('rule'=>'thrilliún'),7=>array('rule'=>'dtrilliún'),11=>array('rule'=>'>>'))),'%is-trillions'=>array('integer'=>array(0=>array('rule'=>' =%%trillion='),1=>array('rule'=>' is =%%spellout-cardinal-prefixpart= =%%trillion='),11=>array('rule'=>' is =%%trillions='),20=>array('rule'=>'=%%is= =%%trillions='))),'%quadrillions'=>array('integer'=>array(1=>array('rule'=>'quadrilliún'),2=>array('rule'=>'=%%spellout-cardinal-prefixpart= quadrilliún'),11=>array('rule'=>'=%%spellout-cardinal-prefixpart= quadrilliún déag'),20=>array('rule'=>'=%%spellout-cardinal-prefixpart= quadrilliún'),100=>array('rule'=>'<%%hundreds<>%%is-quadrillions>'))),'%is-quadrillions'=>array('integer'=>array(0=>array('rule'=>' quadrilliún'),1=>array('rule'=>' is =%%spellout-cardinal-prefixpart= quadrilliún'),11=>array('rule'=>' is =%%quadrillions='),20=>array('rule'=>'=%%is= =%%quadrillions='))),'spellout-ordinal'=>array('-x'=>array('rule'=>'−>>'),'integer'=>array(array('rule'=>'=#,##0.#=.'))));
