@extends('layouts.site')

@section('title', '株式会社Coredesia（コアデシア）｜想いの「芯」を、ワクワクする「冒険」へ。')
@section('description', '株式会社Coredesia（コアデシア）は、福岡の興亜グループのテックカンパニーです。システム開発、HP・LP制作、ITコンサルティング、採用支援、自社プロダクト「CORE DX PORTAL」を提供しています。')

@section('content')
<section id="top" class="l-sky" style="position: relative; overflow: hidden">
<svg viewBox="0 0 1440 1000" preserveAspectRatio="xMidYMid slice" aria-hidden="true" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%">
<defs>
<filter id="lMwBlur" x="-20%" y="-50%" width="140%" height="200%"><feGaussianBlur stdDeviation="28"/></filter>
<filter id="lMwBlur2" x="-20%" y="-50%" width="140%" height="200%"><feGaussianBlur stdDeviation="10"/></filter>
<linearGradient id="lMwFade" x1="0" y1="0" x2="0" y2="1000" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="0.86" stop-color="#fff"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></linearGradient>
<mask id="lMwMask" maskUnits="userSpaceOnUse" x="0" y="0" width="1440" height="1000"><rect width="1440" height="1000" fill="url(#lMwFade)"/></mask>
<filter id="lDust" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency="0.85" numOctaves="1" seed="5"/><feColorMatrix values="0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 11 -8.6"/></filter>
<filter id="lDust2" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency="0.62" numOctaves="1" seed="31"/><feColorMatrix values="0 0 0 0 0.9  0 0 0 0 0.95  0 0 0 0 1  0 0 0 9 -6.9"/></filter>
<filter id="lGlow" x="-200%" y="-200%" width="500%" height="500%"><feGaussianBlur stdDeviation="3"/></filter>
<filter id="lCore" x="-100%" y="-100%" width="300%" height="300%"><feGaussianBlur stdDeviation="30"/></filter>
<path id="lSpark" d="M0 -10L1 -1L10 0L1 1L0 10L-1 1L-10 0L-1 -1Z" fill="#fff"/>
<filter id="lMwCl" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency="0.006 0.022" numOctaves="5" seed="14"/><feColorMatrix values="0 0 0 0 0.86  0 0 0 0 0.93  0 0 0 0 1  0 0 0 2.8 -1.45"/></filter>
<filter id="lMwBand" x="-30%" y="-100%" width="160%" height="300%"><feGaussianBlur stdDeviation="22"/></filter>
<mask id="lMwClMask" maskUnits="userSpaceOnUse" x="-200" y="-200" width="2000" height="900"><ellipse cx="750" cy="240" rx="620" ry="70" fill="#fff" filter="url(#lMwBand)"/></mask>
</defs>
<rect width="1440" height="1000" fill="#fff" filter="url(#lDust)" opacity="0.85" mask="url(#lMwMask)"/>
<rect width="1440" height="1000" fill="#fff" filter="url(#lDust2)" opacity="0.6" mask="url(#lMwMask)"/>
<g mask="url(#lMwMask)">
<g transform="translate(-30 230) rotate(-84 750 240)">
<ellipse cx="750" cy="240" rx="660" ry="80" fill="#BFD6FF" opacity="0.26" filter="url(#lMwBlur)"/>
<ellipse cx="760" cy="238" rx="500" ry="32" fill="#F2F6FF" opacity="0.3" filter="url(#lMwBlur2)"/>
<rect x="110" y="140" width="1300" height="200" filter="url(#lMwCl)" mask="url(#lMwClMask)" opacity="0.85"/>
<ellipse cx="720" cy="246" rx="420" ry="8" fill="#0A1C66" opacity="0.4" filter="url(#lMwBlur2)"/>
</g>
<g opacity="0.85" transform="translate(-30 230) rotate(-66 750 240)"><circle cx="709" cy="239" r="0.3" fill="#fff" opacity="0.5"/><circle cx="710" cy="267" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1230" cy="64" r="0.3" fill="#fff" opacity="0.7"/><circle cx="697" cy="201" r="0.5" fill="#fff" opacity="0.4"/><circle cx="461" cy="367" r="0.3" fill="#fff" opacity="0.7"/><circle cx="622" cy="309" r="0.3" fill="#fff" opacity="0.8"/><circle cx="425" cy="356" r="0.3" fill="#fff" opacity="0.7"/><circle cx="1202" cy="154" r="0.5" fill="#fff" opacity="0.4"/><circle cx="1090" cy="152" r="0.5" fill="#fff" opacity="0.3"/><circle cx="616" cy="354" r="0.5" fill="#fff" opacity="0.4"/><circle cx="460" cy="328" r="0.3" fill="#fff" opacity="0.4"/><circle cx="836" cy="141" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1181" cy="152" r="0.3" fill="#fff" opacity="0.6"/><circle cx="791" cy="286" r="0.3" fill="#fff" opacity="0.5"/><circle cx="637" cy="266" r="0.3" fill="#fff" opacity="0.4"/><circle cx="869" cy="188" r="0.3" fill="#fff" opacity="0.3"/><circle cx="810" cy="204" r="0.5" fill="#fff" opacity="0.7"/><circle cx="832" cy="200" r="0.3" fill="#fff" opacity="0.4"/><circle cx="976" cy="191" r="0.3" fill="#fff" opacity="0.7"/><circle cx="1130" cy="107" r="0.3" fill="#fff" opacity="0.7"/><circle cx="320" cy="405" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1284" cy="41" r="0.3" fill="#fff" opacity="0.5"/><circle cx="868" cy="218" r="0.3" fill="#fff" opacity="0.5"/><circle cx="557" cy="303" r="0.3" fill="#fff" opacity="0.5"/><circle cx="513" cy="305" r="0.5" fill="#fff" opacity="0.7"/><circle cx="1088" cy="127" r="0.5" fill="#fff" opacity="0.5"/><circle cx="1055" cy="127" r="0.3" fill="#fff" opacity="0.3"/><circle cx="1036" cy="140" r="0.5" fill="#fff" opacity="0.8"/><circle cx="816" cy="237" r="0.5" fill="#fff" opacity="0.3"/><circle cx="1233" cy="104" r="0.3" fill="#fff" opacity="0.4"/><circle cx="380" cy="375" r="0.3" fill="#fff" opacity="0.3"/><circle cx="429" cy="358" r="0.5" fill="#fff" opacity="0.4"/><circle cx="216" cy="423" r="0.5" fill="#fff" opacity="0.6"/><circle cx="351" cy="342" r="0.3" fill="#fff" opacity="0.7"/><circle cx="525" cy="341" r="0.3" fill="#fff" opacity="0.7"/><circle cx="1040" cy="170" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1083" cy="116" r="0.5" fill="#fff" opacity="0.5"/><circle cx="1215" cy="63" r="0.5" fill="#fff" opacity="0.6"/><circle cx="390" cy="347" r="0.3" fill="#fff" opacity="0.7"/><circle cx="423" cy="335" r="0.5" fill="#fff" opacity="0.5"/><circle cx="815" cy="201" r="0.5" fill="#fff" opacity="0.6"/><circle cx="488" cy="339" r="0.3" fill="#fff" opacity="0.8"/><circle cx="231" cy="485" r="0.5" fill="#fff" opacity="0.6"/><circle cx="790" cy="223" r="0.3" fill="#fff" opacity="0.7"/><circle cx="831" cy="226" r="0.3" fill="#fff" opacity="0.7"/><circle cx="313" cy="379" r="0.5" fill="#fff" opacity="0.5"/><circle cx="739" cy="235" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1166" cy="94" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1258" cy="35" r="0.3" fill="#fff" opacity="0.3"/><circle cx="856" cy="186" r="0.3" fill="#fff" opacity="0.6"/><circle cx="647" cy="294" r="0.3" fill="#fff" opacity="0.3"/><circle cx="232" cy="419" r="0.5" fill="#fff" opacity="0.6"/><circle cx="722" cy="245" r="0.3" fill="#fff" opacity="0.7"/><circle cx="209" cy="403" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1274" cy="136" r="0.3" fill="#fff" opacity="0.7"/><circle cx="938" cy="172" r="0.5" fill="#fff" opacity="0.7"/><circle cx="411" cy="353" r="0.3" fill="#fff" opacity="0.3"/><circle cx="909" cy="204" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1015" cy="110" r="0.5" fill="#fff" opacity="0.7"/><circle cx="289" cy="399" r="0.3" fill="#fff" opacity="0.4"/><circle cx="769" cy="246" r="0.3" fill="#fff" opacity="0.8"/><circle cx="771" cy="269" r="0.5" fill="#fff" opacity="0.3"/><circle cx="476" cy="358" r="0.3" fill="#fff" opacity="0.6"/><circle cx="949" cy="135" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1080" cy="194" r="0.5" fill="#fff" opacity="0.8"/><circle cx="1164" cy="94" r="0.5" fill="#fff" opacity="0.8"/><circle cx="303" cy="374" r="0.5" fill="#fff" opacity="0.5"/><circle cx="581" cy="319" r="0.5" fill="#fff" opacity="0.5"/><circle cx="286" cy="379" r="0.5" fill="#fff" opacity="0.5"/><circle cx="404" cy="391" r="0.5" fill="#fff" opacity="0.3"/><circle cx="301" cy="383" r="0.3" fill="#fff" opacity="0.7"/><circle cx="924" cy="190" r="0.3" fill="#fff" opacity="0.8"/><circle cx="294" cy="480" r="0.5" fill="#fff" opacity="0.4"/><circle cx="796" cy="210" r="0.5" fill="#fff" opacity="0.3"/><circle cx="936" cy="156" r="0.5" fill="#fff" opacity="0.7"/><circle cx="1079" cy="144" r="0.3" fill="#fff" opacity="0.5"/><circle cx="203" cy="440" r="0.3" fill="#fff" opacity="0.3"/><circle cx="1213" cy="76" r="0.3" fill="#fff" opacity="0.3"/><circle cx="561" cy="286" r="0.5" fill="#fff" opacity="0.6"/><circle cx="635" cy="237" r="0.3" fill="#fff" opacity="0.6"/><circle cx="593" cy="314" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1079" cy="124" r="0.3" fill="#fff" opacity="0.6"/><circle cx="210" cy="413" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1029" cy="141" r="0.5" fill="#fff" opacity="0.8"/><circle cx="1030" cy="145" r="0.5" fill="#fff" opacity="0.5"/><circle cx="1293" cy="82" r="0.3" fill="#fff" opacity="0.5"/><circle cx="1022" cy="122" r="0.5" fill="#fff" opacity="0.8"/><circle cx="228" cy="450" r="0.3" fill="#fff" opacity="0.6"/><circle cx="1245" cy="80" r="0.5" fill="#fff" opacity="0.4"/><circle cx="797" cy="185" r="0.5" fill="#fff" opacity="0.4"/><circle cx="423" cy="332" r="0.3" fill="#fff" opacity="0.8"/><circle cx="987" cy="127" r="0.5" fill="#fff" opacity="0.5"/><circle cx="609" cy="308" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1260" cy="101" r="0.3" fill="#fff" opacity="0.7"/><circle cx="1266" cy="88" r="0.3" fill="#fff" opacity="0.7"/><circle cx="213" cy="398" r="0.3" fill="#fff" opacity="0.8"/><circle cx="390" cy="329" r="0.3" fill="#fff" opacity="0.7"/><circle cx="845" cy="260" r="0.5" fill="#fff" opacity="0.4"/><circle cx="342" cy="363" r="0.5" fill="#fff" opacity="0.5"/><circle cx="284" cy="404" r="0.5" fill="#fff" opacity="0.8"/><circle cx="246" cy="380" r="0.3" fill="#fff" opacity="0.7"/><circle cx="1171" cy="89" r="0.5" fill="#fff" opacity="0.7"/><circle cx="1068" cy="85" r="0.3" fill="#fff" opacity="0.7"/><circle cx="236" cy="427" r="0.5" fill="#fff" opacity="0.5"/><circle cx="398" cy="354" r="0.3" fill="#fff" opacity="0.6"/><circle cx="748" cy="238" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1298" cy="95" r="0.3" fill="#fff" opacity="0.6"/><circle cx="992" cy="153" r="0.5" fill="#fff" opacity="0.5"/><circle cx="448" cy="361" r="0.5" fill="#fff" opacity="0.5"/><circle cx="902" cy="236" r="0.5" fill="#fff" opacity="0.6"/><circle cx="431" cy="326" r="0.5" fill="#fff" opacity="0.7"/><circle cx="649" cy="308" r="0.5" fill="#fff" opacity="0.8"/><circle cx="265" cy="360" r="0.5" fill="#fff" opacity="0.5"/><circle cx="928" cy="162" r="0.5" fill="#fff" opacity="0.7"/><circle cx="767" cy="216" r="0.5" fill="#fff" opacity="0.4"/><circle cx="519" cy="326" r="0.5" fill="#fff" opacity="0.7"/><circle cx="785" cy="228" r="0.5" fill="#fff" opacity="0.7"/><circle cx="601" cy="207" r="0.5" fill="#fff" opacity="0.6"/><circle cx="1002" cy="238" r="0.3" fill="#fff" opacity="0.6"/><circle cx="286" cy="361" r="0.5" fill="#fff" opacity="0.8"/><circle cx="1270" cy="166" r="0.3" fill="#fff" opacity="0.6"/><circle cx="466" cy="305" r="0.3" fill="#fff" opacity="0.6"/><circle cx="501" cy="322" r="0.3" fill="#fff" opacity="0.8"/><circle cx="1002" cy="172" r="0.5" fill="#fff" opacity="0.8"/><circle cx="725" cy="210" r="0.3" fill="#fff" opacity="0.8"/><circle cx="737" cy="220" r="0.5" fill="#fff" opacity="0.6"/><circle cx="841" cy="207" r="0.5" fill="#fff" opacity="0.7"/><circle cx="386" cy="431" r="0.5" fill="#fff" opacity="0.7"/><circle cx="511" cy="356" r="0.5" fill="#fff" opacity="0.7"/><circle cx="654" cy="208" r="0.5" fill="#fff" opacity="0.6"/></g>
</g>
<ellipse cx="720" cy="660" rx="120" ry="200" fill="#FFC870" opacity="0.38" filter="url(#lCore)"/>
<ellipse cx="720" cy="690" rx="50" ry="110" fill="#FFF2CC" opacity="0.45" filter="url(#lCore)"/>
<g class="l-tw3">
<circle cx="214" cy="96" r="5" fill="#CFE0FF" opacity="0.4" filter="url(#lGlow)"/><circle cx="214" cy="96" r="1.6" fill="#fff"/>
<circle cx="1186" cy="64" r="5" fill="#CFE0FF" opacity="0.4" filter="url(#lGlow)"/><circle cx="1186" cy="64" r="1.6" fill="#fff"/>
<circle cx="902" cy="188" r="4" fill="#FFE9C4" opacity="0.4" filter="url(#lGlow)"/><circle cx="902" cy="188" r="1.4" fill="#fff"/>
<circle cx="478" cy="228" r="4" fill="#CFE0FF" opacity="0.4" filter="url(#lGlow)"/><circle cx="478" cy="228" r="1.4" fill="#fff"/>
<circle cx="1330" cy="300" r="5" fill="#CFE0FF" opacity="0.4" filter="url(#lGlow)"/><circle cx="1330" cy="300" r="1.6" fill="#fff"/>
<circle cx="96" cy="270" r="4" fill="#FFE9C4" opacity="0.4" filter="url(#lGlow)"/><circle cx="96" cy="270" r="1.4" fill="#fff"/>
</g>
<g class="l-tw2">
<use href="#lSpark" transform="translate(372 64) scale(0.9)"/>
<use href="#lSpark" transform="translate(1050 120) scale(1.1)"/>
<use href="#lSpark" transform="translate(620 150) scale(0.7)"/>
<use href="#lSpark" transform="translate(1270 210) scale(0.8)"/>
<use href="#lSpark" transform="translate(160 190) scale(0.7)"/>
</g>
<g class="l-tw1"><circle cx="193" cy="440" r="0.4" fill="#fff" opacity="0.5"/><circle cx="1095" cy="245" r="1" fill="#fff" opacity="0.5"/><circle cx="383" cy="416" r="1.2" fill="#fff" opacity="0.9"/><circle cx="44" cy="13" r="1.2" fill="#fff" opacity="1.0"/><circle cx="548" cy="112" r="1" fill="#fff" opacity="0.7"/><circle cx="974" cy="395" r="0.8" fill="#fff" opacity="0.6"/><circle cx="1042" cy="154" r="1.6" fill="#fff" opacity="0.9"/><circle cx="1401" cy="260" r="1" fill="#fff" opacity="0.6"/><circle cx="49" cy="126" r="1" fill="#fff1d0" opacity="0.8"/><circle cx="955" cy="56" r="0.6" fill="#fff1d0" opacity="0.6"/><circle cx="242" cy="118" r="0.4" fill="#fff" opacity="0.7"/><circle cx="1238" cy="120" r="1.2" fill="#fff" opacity="1.0"/><circle cx="832" cy="238" r="0.8" fill="#fff" opacity="0.6"/><circle cx="808" cy="221" r="0.4" fill="#d8e4ff" opacity="0.9"/><circle cx="820" cy="103" r="1.2" fill="#fff1d0" opacity="0.7"/><circle cx="513" cy="179" r="1.2" fill="#fff" opacity="0.7"/><circle cx="40" cy="119" r="0.6" fill="#fff" opacity="0.9"/><circle cx="969" cy="43" r="0.4" fill="#d8e4ff" opacity="0.4"/><circle cx="1088" cy="129" r="0.4" fill="#fff" opacity="0.6"/><circle cx="100" cy="83" r="1.2" fill="#fff" opacity="0.8"/><circle cx="933" cy="153" r="1.6" fill="#fff" opacity="0.7"/><circle cx="164" cy="162" r="0.8" fill="#fff1d0" opacity="0.9"/><circle cx="372" cy="131" r="1.6" fill="#fff" opacity="1.0"/><circle cx="933" cy="205" r="1.2" fill="#fff" opacity="0.8"/><circle cx="613" cy="383" r="0.6" fill="#fff" opacity="0.9"/><circle cx="599" cy="131" r="0.4" fill="#fff" opacity="0.8"/><circle cx="1252" cy="405" r="1.2" fill="#fff" opacity="0.6"/><circle cx="499" cy="106" r="1.6" fill="#fff1d0" opacity="0.8"/><circle cx="24" cy="318" r="1" fill="#fff" opacity="0.4"/><circle cx="289" cy="170" r="1.2" fill="#fff" opacity="0.6"/><circle cx="306" cy="350" r="1" fill="#fff" opacity="0.9"/><circle cx="1206" cy="277" r="1.2" fill="#fff" opacity="0.4"/><circle cx="58" cy="69" r="0.6" fill="#fff" opacity="0.6"/><circle cx="478" cy="263" r="0.8" fill="#fff" opacity="0.6"/><circle cx="164" cy="122" r="1.2" fill="#d8e4ff" opacity="0.5"/><circle cx="793" cy="54" r="0.4" fill="#fff1d0" opacity="0.4"/><circle cx="1371" cy="189" r="0.8" fill="#fff" opacity="0.7"/><circle cx="20" cy="215" r="0.4" fill="#fff" opacity="0.5"/><circle cx="1422" cy="218" r="0.4" fill="#d8e4ff" opacity="0.5"/><circle cx="452" cy="107" r="0.8" fill="#fff" opacity="0.4"/><circle cx="451" cy="32" r="0.8" fill="#d8e4ff" opacity="0.5"/><circle cx="309" cy="321" r="1.2" fill="#d8e4ff" opacity="0.8"/><circle cx="373" cy="281" r="0.8" fill="#fff" opacity="0.5"/><circle cx="117" cy="146" r="1" fill="#fff" opacity="0.8"/><circle cx="145" cy="317" r="1.2" fill="#fff" opacity="0.5"/><circle cx="29" cy="126" r="0.4" fill="#fff" opacity="0.7"/><circle cx="102" cy="39" r="1.6" fill="#fff" opacity="0.6"/><circle cx="1140" cy="256" r="0.6" fill="#fff" opacity="0.7"/></g>
<g class="l-tw2"><circle cx="1203" cy="382" r="1.6" fill="#fff" opacity="0.6"/><circle cx="305" cy="18" r="1.6" fill="#fff" opacity="1.0"/><circle cx="919" cy="417" r="1.2" fill="#fff" opacity="0.7"/><circle cx="640" cy="139" r="0.4" fill="#fff" opacity="0.6"/><circle cx="340" cy="12" r="0.8" fill="#fff" opacity="0.5"/><circle cx="641" cy="215" r="1.2" fill="#fff" opacity="0.9"/><circle cx="575" cy="384" r="1.6" fill="#fff" opacity="0.7"/><circle cx="1331" cy="260" r="0.8" fill="#d8e4ff" opacity="0.9"/><circle cx="663" cy="295" r="1.2" fill="#d8e4ff" opacity="0.7"/><circle cx="319" cy="168" r="1.6" fill="#fff" opacity="0.9"/><circle cx="887" cy="401" r="1" fill="#fff" opacity="0.6"/><circle cx="299" cy="266" r="1.6" fill="#fff" opacity="0.9"/><circle cx="491" cy="4" r="0.6" fill="#fff" opacity="0.4"/><circle cx="940" cy="142" r="0.6" fill="#fff" opacity="0.9"/><circle cx="196" cy="138" r="0.6" fill="#fff" opacity="0.7"/><circle cx="1032" cy="16" r="0.8" fill="#fff" opacity="0.5"/><circle cx="1322" cy="194" r="0.6" fill="#fff" opacity="0.8"/><circle cx="753" cy="1" r="1.2" fill="#fff" opacity="0.9"/><circle cx="903" cy="388" r="0.8" fill="#fff" opacity="0.7"/><circle cx="444" cy="286" r="1.2" fill="#fff" opacity="0.9"/><circle cx="324" cy="343" r="0.8" fill="#fff" opacity="0.4"/><circle cx="1397" cy="339" r="1.6" fill="#fff" opacity="0.8"/><circle cx="364" cy="68" r="0.6" fill="#fff" opacity="0.7"/><circle cx="334" cy="231" r="0.8" fill="#fff" opacity="0.8"/><circle cx="609" cy="273" r="0.4" fill="#fff" opacity="0.4"/><circle cx="588" cy="57" r="1.6" fill="#fff" opacity="0.5"/><circle cx="143" cy="94" r="0.6" fill="#fff" opacity="0.5"/><circle cx="749" cy="241" r="0.8" fill="#fff1d0" opacity="0.5"/><circle cx="30" cy="307" r="1" fill="#fff" opacity="1.0"/><circle cx="955" cy="249" r="0.4" fill="#fff" opacity="0.8"/><circle cx="986" cy="52" r="0.8" fill="#fff" opacity="0.9"/><circle cx="968" cy="8" r="1" fill="#fff" opacity="0.6"/><circle cx="699" cy="108" r="1.2" fill="#fff" opacity="0.4"/><circle cx="34" cy="159" r="1.6" fill="#fff" opacity="0.5"/><circle cx="706" cy="60" r="0.8" fill="#fff1d0" opacity="0.8"/><circle cx="201" cy="179" r="0.4" fill="#fff" opacity="0.5"/><circle cx="997" cy="12" r="1.6" fill="#d8e4ff" opacity="0.9"/><circle cx="1041" cy="258" r="0.8" fill="#d8e4ff" opacity="0.5"/><circle cx="539" cy="251" r="1" fill="#fff1d0" opacity="1.0"/><circle cx="1203" cy="154" r="0.6" fill="#fff" opacity="0.7"/><circle cx="373" cy="222" r="1.6" fill="#fff" opacity="0.8"/><circle cx="1177" cy="49" r="0.8" fill="#fff" opacity="1.0"/><circle cx="210" cy="216" r="0.4" fill="#fff" opacity="0.9"/><circle cx="562" cy="368" r="1.6" fill="#fff" opacity="0.7"/><circle cx="754" cy="58" r="1.2" fill="#fff1d0" opacity="0.5"/><circle cx="743" cy="371" r="0.8" fill="#fff" opacity="0.9"/><circle cx="825" cy="75" r="1" fill="#fff" opacity="0.9"/><circle cx="788" cy="370" r="1.6" fill="#fff" opacity="0.9"/><circle cx="1226" cy="116" r="1.2" fill="#fff" opacity="0.6"/></g>
<g class="l-tw3"><circle cx="342" cy="228" r="0.8" fill="#d8e4ff" opacity="0.8"/><circle cx="94" cy="5" r="1" fill="#fff" opacity="0.7"/><circle cx="276" cy="301" r="1.2" fill="#d8e4ff" opacity="0.6"/><circle cx="1239" cy="97" r="0.6" fill="#fff1d0" opacity="0.8"/><circle cx="966" cy="26" r="1.2" fill="#fff" opacity="0.6"/><circle cx="1326" cy="165" r="1.2" fill="#d8e4ff" opacity="1.0"/><circle cx="193" cy="153" r="0.4" fill="#fff" opacity="0.7"/><circle cx="371" cy="282" r="1.6" fill="#fff" opacity="0.7"/><circle cx="1200" cy="241" r="1.2" fill="#fff1d0" opacity="0.8"/><circle cx="1302" cy="286" r="0.4" fill="#fff" opacity="1.0"/><circle cx="966" cy="68" r="0.8" fill="#fff" opacity="0.8"/><circle cx="597" cy="49" r="1.2" fill="#fff" opacity="0.6"/><circle cx="844" cy="231" r="0.8" fill="#fff" opacity="1.0"/><circle cx="445" cy="32" r="1.2" fill="#fff" opacity="1.0"/><circle cx="1398" cy="122" r="0.8" fill="#fff" opacity="0.8"/><circle cx="1411" cy="142" r="0.8" fill="#fff" opacity="0.9"/><circle cx="544" cy="193" r="1.2" fill="#fff1d0" opacity="0.8"/><circle cx="1037" cy="99" r="0.8" fill="#fff1d0" opacity="1.0"/><circle cx="453" cy="158" r="1.2" fill="#fff" opacity="0.4"/><circle cx="903" cy="195" r="1.6" fill="#fff" opacity="0.8"/><circle cx="401" cy="205" r="1.2" fill="#fff" opacity="1.0"/><circle cx="30" cy="155" r="1.6" fill="#d8e4ff" opacity="0.6"/><circle cx="866" cy="74" r="0.6" fill="#fff" opacity="0.9"/><circle cx="1215" cy="110" r="1" fill="#fff" opacity="0.9"/><circle cx="38" cy="239" r="1.6" fill="#fff" opacity="0.6"/><circle cx="971" cy="94" r="0.6" fill="#fff" opacity="0.6"/><circle cx="174" cy="222" r="0.6" fill="#fff" opacity="0.9"/><circle cx="1207" cy="77" r="0.8" fill="#fff" opacity="0.9"/><circle cx="954" cy="217" r="0.8" fill="#fff" opacity="0.9"/><circle cx="247" cy="125" r="1.6" fill="#fff" opacity="0.7"/><circle cx="1295" cy="242" r="0.4" fill="#d8e4ff" opacity="0.8"/></g>
</svg>
<div class="l-shoot" aria-hidden="true"></div>
<div class="l-shoot l-shoot2" aria-hidden="true"></div>
<div aria-hidden="true" style="position: absolute; left: 0; right: 0; bottom: 140px; height: 300px; overflow: hidden">
<svg class="l-cloud" viewBox="0 0 1800 300" preserveAspectRatio="none" style="position: absolute; left: 0; top: 0; width: 1800px; height: 300px">
<defs>
<filter id="lCl1" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency="0.0035 0.016" numOctaves="5" seed="8"/><feColorMatrix values="0 0 0 0 1  0 0 0 0 0.74  0 0 0 0 0.66  0 0 0 2.6 -1.35"/></filter>
<linearGradient id="lClF1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="0.45" stop-color="#fff" stop-opacity="1"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></linearGradient>
<mask id="lClM1"><rect width="1800" height="300" fill="url(#lClF1)"/></mask>
</defs>
<rect width="1800" height="300" filter="url(#lCl1)" mask="url(#lClM1)" opacity="0.75"/>
</svg>
<svg class="l-cloud l-cloud2" viewBox="0 0 1800 300" preserveAspectRatio="none" style="position: absolute; left: -200px; top: -90px; width: 1800px; height: 300px">
<defs>
<filter id="lCl2" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency="0.003 0.02" numOctaves="5" seed="21"/><feColorMatrix values="0 0 0 0 0.17  0 0 0 0 0.2  0 0 0 0 0.5  0 0 0 2.6 -1.3"/></filter>
<linearGradient id="lClF2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#fff" stop-opacity="0"/><stop offset="0.5" stop-color="#fff" stop-opacity="1"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></linearGradient>
<mask id="lClM2"><rect width="1800" height="300" fill="url(#lClF2)"/></mask>
</defs>
<rect width="1800" height="300" filter="url(#lCl2)" mask="url(#lClM2)" opacity="0.8"/>
</svg>
</div>

@include('partials.site-header')

<div class="l-hero" style="position: relative; max-width: 1280px; margin: 0 auto; padding: 72px 32px 0">
<div>
<p style="margin: 0 0 28px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 24px; color: #E9C77B">— between the core and the sky</p>
<p style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 26px; line-height: 2.1; max-width: 520px; text-shadow: 0 0 18px rgba(15,26,61,0.6)">確かな技術と自由な発想で、<br>アイデアをカタチにする。</p>
<div style="margin-top: 48px; display: flex; gap: 20px; align-items: center; flex-wrap: wrap">
<a href="{{ route('services.coredx') }}" style="text-decoration: none; background: #F3F1EA; color: #0F1A3D; padding: 16px 30px; border-radius: 999px; font-weight: 700">CORE DX PORTAL</a>
<a href="{{ route('services') }}" style="font-size: 15px">事業内容を見る</a>
</div>
</div>
<h1 class="l-vert" style="margin: 0; writing-mode: vertical-rl; font-family: 'Zen Old Mincho', serif; font-weight: 900; font-size: 64px; line-height: 1.45; letter-spacing: 0.1em; height: 640px; text-shadow: 0 0 24px rgba(255,236,200,0.55), 0 0 2px rgba(255,255,255,0.8)">想いの「芯」を、<br>ワクワクする<br>「冒険」へ。</h1>
</div>

<svg viewBox="0 0 1440 400" preserveAspectRatio="none" aria-hidden="true" style="position: relative; display: block; width: 100%; height: 360px; margin-top: -60px">
<defs>
<filter id="lHz" x="-10%" y="-100%" width="120%" height="300%"><feGaussianBlur stdDeviation="18"/></filter>
<linearGradient id="lM1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#8C6FB4"/><stop offset="1" stop-color="#4E4A98"/></linearGradient>
<linearGradient id="lM2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#3E3F8C"/><stop offset="1" stop-color="#2A2D6E"/></linearGradient>
<linearGradient id="lM3" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#1D2360"/><stop offset="1" stop-color="#161B4A"/></linearGradient>
<linearGradient id="lM4" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#0D1338"/><stop offset="1" stop-color="#0F1A3D"/></linearGradient>
</defs>
<ellipse cx="720" cy="150" rx="820" ry="70" fill="#FFD9A8" opacity="0.35" filter="url(#lHz)"/>
<path d="M0 400L0 110L11 111L22 107L34 100L45 100L56 101L68 106L79 106L90 112L101 113L112 121L124 125L135 125L146 119L158 119L169 117L180 114L191 116L202 119L214 122L225 130L236 134L248 134L259 126L270 124L281 129L292 132L304 126L315 127L326 128L338 130L349 124L360 122L371 124L382 130L394 135L405 131L416 133L428 130L439 131L450 135L461 132L472 123L484 119L495 120L506 118L518 117L529 122L540 122L551 114L562 105L574 99L585 100L596 107L608 106L619 102L630 103L641 103L652 106L664 111L675 112L686 115L698 121L709 118L720 120L731 114L742 115L754 112L765 115L776 123L788 130L799 129L810 132L821 137L832 140L844 138L855 138L866 140L878 142L889 155L900 161L911 156L922 152L934 153L945 153L956 160L968 161L979 156L990 157L1001 155L1012 159L1024 164L1035 161L1046 174L1058 182L1069 183L1080 189L1091 184L1102 185L1114 186L1125 184L1136 184L1148 176L1159 176L1170 181L1181 181L1192 173L1204 171L1215 162L1226 161L1238 158L1249 151L1260 146L1271 145L1282 150L1294 151L1305 160L1316 160L1328 152L1339 152L1350 156L1361 156L1372 153L1384 151L1395 154L1406 159L1418 159L1429 155L1440 150L1440 400Z" fill="url(#lM1)" opacity="0.8"/>
<rect x="0" y="175" width="1440" height="50" fill="#E7B9B6" opacity="0.22" filter="url(#lHz)"/>
<path d="M0 400L0 210L11 209L22 204L34 203L45 206L56 208L68 205L79 202L90 204L101 207L112 211L124 209L135 213L146 217L158 218L169 220L180 221L191 226L202 227L214 232L225 234L236 238L248 238L259 239L270 239L281 245L292 245L304 251L315 256L326 258L338 263L349 272L360 276L371 273L382 270L394 267L405 267L416 268L428 273L439 272L450 272L461 270L472 272L484 276L495 277L506 276L518 271L529 270L540 272L551 266L562 265L574 265L585 265L596 259L608 256L619 257L630 256L641 258L652 256L664 256L675 259L686 259L698 259L709 260L720 257L731 258L742 260L754 257L765 256L776 256L788 252L799 253L810 251L821 254L832 253L844 256L855 257L866 253L878 250L889 250L900 248L911 246L922 241L934 240L945 238L956 236L968 238L979 234L990 233L1001 235L1012 239L1024 243L1035 244L1046 243L1058 243L1069 245L1080 246L1091 241L1102 233L1114 228L1125 227L1136 226L1148 223L1159 217L1170 213L1181 213L1192 213L1204 213L1215 210L1226 209L1238 210L1249 210L1260 205L1271 200L1282 199L1294 200L1305 199L1316 197L1328 194L1339 190L1350 189L1361 186L1372 184L1384 177L1395 171L1406 169L1418 166L1429 164L1440 160L1440 400Z" fill="url(#lM2)"/>
<rect x="0" y="250" width="1440" height="40" fill="#B08FB8" opacity="0.18" filter="url(#lHz)"/>
<path d="M0 400L0 230L11 234L22 236L34 237L45 238L56 239L68 240L79 241L90 244L101 245L112 248L124 247L135 247L146 252L158 254L169 256L180 260L191 262L202 262L214 263L225 261L236 263L248 263L259 265L270 268L281 267L292 267L304 264L315 261L326 262L338 261L349 258L360 258L371 263L382 265L394 267L405 266L416 268L428 268L439 265L450 265L461 266L472 265L484 265L495 268L506 266L518 266L529 266L540 265L551 265L562 262L574 262L585 263L596 265L608 263L619 266L630 268L641 265L652 264L664 264L675 265L686 260L698 258L709 255L720 255L731 253L742 254L754 254L765 253L776 255L788 253L799 255L810 259L821 261L832 266L844 269L855 270L866 272L878 273L889 276L900 279L911 276L922 274L934 274L945 273L956 275L968 276L979 275L990 275L1001 273L1012 271L1024 268L1035 268L1046 270L1058 269L1069 269L1080 272L1091 270L1102 269L1114 269L1125 266L1136 262L1148 261L1159 258L1170 253L1181 251L1192 246L1204 246L1215 245L1226 247L1238 247L1249 244L1260 244L1271 242L1282 240L1294 240L1305 243L1316 246L1328 247L1339 247L1350 248L1361 250L1372 253L1384 255L1395 254L1406 253L1418 249L1429 251L1440 250L1440 400Z" fill="url(#lM3)"/>
<path d="M0 400L0 308L11 307L22 306L34 305L45 304L56 303L68 301L79 300L90 299L101 298L112 299L124 297L135 296L146 296L158 296L169 296L180 296L191 297L202 296L214 296L225 296L236 295L248 295L259 295L270 294L281 294L292 295L304 295L315 295L326 295L338 295L349 294L360 293L371 293L382 293L394 293L405 292L416 293L428 294L439 295L450 295L461 297L472 297L484 299L495 301L506 302L518 303L529 304L540 305L551 305L562 305L574 305L585 306L596 304L608 304L619 304L630 305L641 305L652 305L664 306L675 306L686 306L698 307L709 307L720 309L731 308L742 307L754 307L765 306L776 307L788 307L799 307L810 306L821 307L832 306L844 306L855 307L866 306L878 305L889 305L900 304L911 302L922 301L934 299L945 299L956 298L968 296L979 295L990 295L1001 295L1012 294L1024 293L1035 292L1046 293L1058 293L1069 294L1080 293L1091 293L1102 293L1114 292L1125 292L1136 292L1148 292L1159 293L1170 294L1181 295L1192 296L1204 297L1215 298L1226 298L1238 298L1249 298L1260 299L1271 298L1282 298L1294 299L1305 298L1316 298L1328 298L1339 298L1350 297L1361 297L1372 296L1384 295L1395 296L1406 295L1418 294L1429 292L1440 292L1440 400Z" fill="url(#lM4)"/>
<g class="l-lights" fill="#FFD9A0"><circle cx="339" cy="359" r="1"/><circle cx="689" cy="359" r="0.8"/><circle cx="578" cy="389" r="0.8"/><circle cx="319" cy="375" r="1"/><circle cx="1122" cy="385" r="1"/><circle cx="308" cy="389" r="1.3"/><circle cx="1161" cy="384" r="0.8"/><circle cx="237" cy="366" r="1.3"/><circle cx="1383" cy="386" r="1"/><circle cx="124" cy="377" r="1.3"/><circle cx="558" cy="364" r="0.8"/><circle cx="681" cy="359" r="1.3"/><circle cx="1210" cy="356" r="1"/><circle cx="824" cy="387" r="1.3"/><circle cx="280" cy="371" r="1"/><circle cx="620" cy="361" r="1"/><circle cx="373" cy="384" r="0.8"/><circle cx="66" cy="378" r="1"/><circle cx="747" cy="379" r="1.3"/><circle cx="493" cy="391" r="0.8"/><circle cx="95" cy="388" r="1.3"/><circle cx="911" cy="365" r="1"/><circle cx="627" cy="377" r="1.3"/><circle cx="804" cy="388" r="0.8"/><circle cx="1208" cy="381" r="1"/><circle cx="1101" cy="378" r="0.8"/><circle cx="175" cy="389" r="1"/><circle cx="660" cy="357" r="1.3"/><circle cx="118" cy="390" r="1"/><circle cx="1058" cy="390" r="0.8"/><circle cx="464" cy="367" r="0.8"/><circle cx="1116" cy="370" r="1.3"/><circle cx="979" cy="358" r="1.3"/><circle cx="275" cy="371" r="0.8"/><circle cx="360" cy="377" r="0.8"/><circle cx="477" cy="356" r="0.8"/><circle cx="654" cy="369" r="1"/><circle cx="1413" cy="371" r="0.8"/><circle cx="163" cy="358" r="1.3"/><circle cx="242" cy="380" r="0.8"/><circle cx="873" cy="375" r="1.3"/><circle cx="358" cy="391" r="0.8"/><circle cx="1202" cy="366" r="1"/><circle cx="938" cy="363" r="0.8"/></g>
</svg>
</section>

<section id="about" style="max-width: 1280px; margin: 0 auto; padding: 120px 32px">
<div class="l-two" style="align-items: center">
<div>
<p style="margin: 0 0 20px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Philosophy</p>
<h2 style="margin: 0; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 42px; line-height: 1.7">確かな技術で、<br>心躍る未来を。</h2>
</div>
<div style="font-size: 17px; line-height: 2.1; color: #C5C9E0">
<p style="margin: 0 0 24px">昭和16年の創業以来、福岡で「ものづくり」の精神を磨き続けてきた株式会社興亜。その誠実なクラフトマンシップを、私たちはデジタルの「芯」として受け継ぎました。</p>
<p style="margin: 0">お客様の想いの芯を捉え、技術で形にする。関わるすべての人に、形を超えたワクワクを届けます。</p>
</div>
</div>
</section>

<div class="l-wave" aria-hidden="true" style="height: 56px"></div>

<section id="services" style="max-width: 1280px; margin: 0 auto; padding: 112px 32px">
<p style="margin: 0 0 20px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B; text-align: center">Services</p>
<h2 style="margin: 0 0 56px; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 40px; text-align: center">事業内容</h2>
<div class="l-svc">
<article style="border: 1px solid rgba(233,199,123,0.45); border-radius: 4px; padding: 36px 28px; background: rgba(30,42,107,0.35); display: flex; flex-direction: column; gap: 14px">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 44px; color: #E9C77B; line-height: 1">一</span>
<h3 style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 21px">システム開発</h3>
<p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">業務システム、Webサービス、スマートフォンアプリまで。システム開発全般をお受けします。</p>
</article>
<article style="border: 1px solid rgba(233,199,123,0.45); border-radius: 4px; padding: 36px 28px; background: rgba(30,42,107,0.35); display: flex; flex-direction: column; gap: 14px">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 44px; color: #E9C77B; line-height: 1">二</span>
<h3 style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 21px">HP・LP制作・運用</h3>
<p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">企業の顔となるサイトや集客LPを制作し、公開後の改善・保守まで担います。</p>
</article>
<article style="border: 1px solid rgba(233,199,123,0.45); border-radius: 4px; padding: 36px 28px; background: rgba(30,42,107,0.35); display: flex; flex-direction: column; gap: 14px">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 44px; color: #E9C77B; line-height: 1">三</span>
<h3 style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 21px">ITコンサルティング</h3>
<p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">DX推進の相談から技術選定、アーキテクチャ設計まで並走します。</p>
</article>
<article style="border: 1px solid rgba(233,199,123,0.45); border-radius: 4px; padding: 36px 28px; background: rgba(30,42,107,0.35); display: flex; flex-direction: column; gap: 14px">
<span style="font-family: 'Zen Old Mincho', serif; font-size: 44px; color: #E9C77B; line-height: 1">四</span>
<h3 style="margin: 0; font-family: 'Zen Old Mincho', serif; font-size: 21px">採用支援（RPO）</h3>
<p style="margin: 0; font-size: 14px; line-height: 1.95; color: #C5C9E0">採用戦略の設計から実務までを担う、ハンズオン型の採用支援です。</p>
</article>
</div>
</section>

<section id="product" style="background: linear-gradient(180deg, #0F1A3D 0%, #2B2F6E 100%)">
<div class="l-two" style="max-width: 1280px; margin: 0 auto; padding: 120px 32px; align-items: center">
<div>
<p style="margin: 0 0 20px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Product</p>
<h2 style="margin: 0; font-family: Montserrat, sans-serif; font-weight: 700; font-size: 44px; letter-spacing: 0.04em; line-height: 1.15">CORE DX PORTAL</h2>
<p style="margin: 10px 0 32px; font-size: 15px; color: #C5C9E0">Cloud Standard</p>
<p style="margin: 0 0 28px; font-family: 'Zen Old Mincho', serif; font-size: 24px; line-height: 1.8">散らばっていた業務を、<br>ひとつの場所へ。</p>
<p style="margin: 0 0 28px; font-size: 15px; line-height: 2; color: #C5C9E0">勤怠・労務、タスク・現場日報、稟議・経費精算、顧客管理、インボイス対応の請求、入金消込、自動仕訳・財務諸表。中小企業・建設業のバックオフィスを、1つのデータベースで管理します。</p>
<dl style="margin: 0 0 36px; display: grid; grid-template-columns: 140px minmax(0, 1fr); gap: 14px 24px; font-size: 15px; border-top: 1px solid rgba(233,199,123,0.45); padding-top: 24px">
<dt style="color: #C5C9E0">基本利用料</dt><dd style="margin: 0; font-weight: 700">30,000円／月（税抜・社内10ID込み）</dd>
<dt style="color: #C5C9E0">追加ユーザー</dt><dd style="margin: 0">1,000円／ID・月（最大50ID）</dd>
<dt style="color: #C5C9E0">初期設定費</dt><dd style="margin: 0">200,000円（税抜）</dd>
</dl>
<a href="{{ route('services.coredx') }}" style="text-decoration: none; background: #E9C77B; color: #0F1A3D; padding: 16px 30px; border-radius: 999px; font-weight: 700; display: inline-block">製品の詳細を見る</a>
</div>
<div style="position: relative">
<div aria-hidden="true" style="position: absolute; inset: -30px; border-radius: 50%; background: rgba(233,199,123,0.18); filter: blur(40px)"></div>
<div style="position: relative; border: 1px solid rgba(233,199,123,0.6); padding: 12px; background: rgba(15,26,61,0.6)">
<img src="{{ asset('images/screenshot_dashboard.png') }}" alt="CORE DX PORTAL 統合ダッシュボード画面" style="width: 100%; display: block">
</div>
</div>
</div>
</section>

<section id="company" style="max-width: 1280px; margin: 0 auto; padding: 120px 32px">
<div class="l-two">
<div>
<p style="margin: 0 0 20px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 22px; color: #E9C77B">Company</p>
<h2 style="margin: 0; font-family: 'Zen Old Mincho', serif; font-weight: 700; font-size: 40px">会社概要</h2>
</div>
<dl style="margin: 0; display: grid; grid-template-columns: 120px minmax(0, 1fr); font-size: 15px; line-height: 1.8">
<dt style="padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35); color: #C5C9E0">会社名</dt><dd style="margin: 0; padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35)">株式会社Coredesia（コアデシア）</dd>
<dt style="padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35); color: #C5C9E0">設立</dt><dd style="margin: 0; padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35)">1995年2月（2025年5月 商号変更）</dd>
<dt style="padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35); color: #C5C9E0">代表取締役</dt><dd style="margin: 0; padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35)">長野 弘禎</dd>
<dt style="padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35); color: #C5C9E0">所在地</dt><dd style="margin: 0; padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35)">福岡県福岡市東区筥松2-6-9</dd>
<dt style="padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35); border-bottom: 1px solid rgba(233,199,123,0.35); color: #C5C9E0">親会社</dt><dd style="margin: 0; padding: 16px 0; border-top: 1px solid rgba(233,199,123,0.35); border-bottom: 1px solid rgba(233,199,123,0.35)">株式会社興亜</dd>
</dl>
</div>
</section>

<section id="contact" class="l-sky" style="position: relative; overflow: hidden">
<svg viewBox="0 0 1440 420" preserveAspectRatio="xMidYMin slice" aria-hidden="true" style="position: absolute; left: 0; top: 0; width: 100%; height: 420px">
<g class="l-tw1"><circle cx="44" cy="13" r="1.2" fill="#fff" opacity="1.0"/><circle cx="548" cy="112" r="1" fill="#fff" opacity="0.7"/><circle cx="1042" cy="154" r="1.6" fill="#fff" opacity="0.9"/><circle cx="1401" cy="260" r="1" fill="#fff" opacity="0.6"/><circle cx="955" cy="56" r="0.6" fill="#fff1d0" opacity="0.6"/><circle cx="1238" cy="120" r="1.2" fill="#fff" opacity="1.0"/><circle cx="820" cy="103" r="1.2" fill="#fff1d0" opacity="0.7"/><circle cx="100" cy="83" r="1.2" fill="#fff" opacity="0.8"/><circle cx="372" cy="131" r="1.6" fill="#fff" opacity="1.0"/><circle cx="499" cy="106" r="1.6" fill="#fff1d0" opacity="0.8"/><circle cx="289" cy="170" r="1.2" fill="#fff" opacity="0.6"/><circle cx="1371" cy="189" r="0.8" fill="#fff" opacity="0.7"/><circle cx="451" cy="32" r="0.8" fill="#d8e4ff" opacity="0.5"/><circle cx="102" cy="39" r="1.6" fill="#fff" opacity="0.6"/></g>
<g class="l-tw2"><circle cx="305" cy="18" r="1.6" fill="#fff" opacity="1.0"/><circle cx="640" cy="139" r="0.4" fill="#fff" opacity="0.6"/><circle cx="319" cy="168" r="1.6" fill="#fff" opacity="0.9"/><circle cx="940" cy="142" r="0.6" fill="#fff" opacity="0.9"/><circle cx="1032" cy="16" r="0.8" fill="#fff" opacity="0.5"/><circle cx="1322" cy="194" r="0.6" fill="#fff" opacity="0.8"/><circle cx="753" cy="8" r="1.2" fill="#fff" opacity="0.9"/><circle cx="588" cy="57" r="1.6" fill="#fff" opacity="0.5"/><circle cx="986" cy="52" r="0.8" fill="#fff" opacity="0.9"/><circle cx="1177" cy="49" r="0.8" fill="#fff" opacity="1.0"/><circle cx="825" cy="75" r="1" fill="#fff" opacity="0.9"/><circle cx="1226" cy="116" r="1.2" fill="#fff" opacity="0.6"/></g>
<g class="l-tw3"><circle cx="94" cy="5" r="1" fill="#fff" opacity="0.7"/><circle cx="1239" cy="97" r="0.6" fill="#fff1d0" opacity="0.8"/><circle cx="966" cy="26" r="1.2" fill="#fff" opacity="0.6"/><circle cx="1326" cy="165" r="1.2" fill="#d8e4ff" opacity="1.0"/><circle cx="597" cy="49" r="1.2" fill="#fff" opacity="0.6"/><circle cx="445" cy="32" r="1.2" fill="#fff" opacity="1.0"/><circle cx="544" cy="193" r="1.2" fill="#fff1d0" opacity="0.8"/><circle cx="903" cy="195" r="1.6" fill="#fff" opacity="0.8"/><circle cx="30" cy="155" r="1.6" fill="#d8e4ff" opacity="0.6"/><circle cx="1215" cy="110" r="1" fill="#fff" opacity="0.9"/><circle cx="247" cy="125" r="1.6" fill="#fff" opacity="0.7"/></g>
</svg>
<div class="l-shoot" aria-hidden="true" style="top: 70px"></div>
<div style="position: relative; max-width: 1280px; margin: 0 auto; padding: 128px 32px 136px; text-align: center">
<p style="margin: 0 0 20px; font-family: 'Cormorant Garamond', serif; font-style: italic; font-size: 26px; color: #FFF1D6">Contact</p>
<h2 style="margin: 0 0 24px; font-family: 'Zen Old Mincho', serif; font-weight: 900; font-size: 48px; line-height: 1.7; text-shadow: 0 0 20px rgba(255,236,200,0.5)">共に、新しい景色を<br>見にいきましょう。</h2>
<p style="margin: 0 0 44px; font-size: 16px">ご相談・お見積もりは、お問い合わせフォームから。</p>
<a href="{{ route('contact') }}" style="text-decoration: none; background: #0F1A3D; color: #F3F1EA; padding: 20px 48px; border-radius: 999px; font-weight: 700; display: inline-block; border: 1px solid #E9C77B">お問い合わせ</a>
</div>
</section>
@endsection
