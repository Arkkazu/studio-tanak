<?php
/* Template Name: トップページ */
get_header();
?>

<body>
  <div class="max-pc:pb-48">

    <?php get_template_part('inc', 'header'); ?>

    <main class="py-70 pc:py-160 ">

      <div class="relative w-full">
        <picture>
          <source media='(min-width: 768px)' srcset='/wp-content/themes/studio-tanaka_theme/assets/media/images/graduation-hakama/hakamaimg_pc.webp'>
          <img class='w-full' src='/wp-content/themes/studio-tanaka_theme/assets/media/images/graduation-hakama/hakamaimg_sp.webp' alt='卒業袴' loading='lazy' width='1125' height='1130'>
        </picture>
        <div class="absolute left-0 md:left-160 pc:left-450 top-1/2 -translate-y-1/2">
          <h1 class="text-20 pc:text-30 font-zenMaruGothic opacity-0 md:opacity-100">卒業袴</h1>
        </div>
      </div>

      <section class="mt-32 pc:mt-88">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">卒業袴 メニュー</h2>
          </div>

          <div class="mt-32 pc:mt-104">
            <div class="flex justify-center gap-x-36 pc:gap-x-124">
              <button class="js-tab-active relative w-62 pc:w-118 group" id="tab1-btn" data-tab="tab1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.18 61.18">
                  <g>
                    <rect class="fill-light-gray pc:group-hover:fill-pink duration-500" width="61.18" height="61.18" />
                    <path class="fill-white" d="M22.35,40.1l7.45-16.45h2.33l7.47,16.45h-2.47l-6.65-15.13h.94l-6.65,15.13h-2.42ZM25.52,35.99l.63-1.88h9.26l.68,1.88h-10.57Z" />
                    <path class="fill-white" d="M18.34,52.63c-.43,0-.82-.07-1.18-.21-.36-.14-.67-.34-.93-.6-.26-.26-.47-.56-.62-.91-.15-.35-.22-.73-.22-1.14s.07-.8.22-1.14c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.75-.21,1.18-.21s.83.07,1.19.22c.36.15.67.36.93.65l-.52.5c-.21-.22-.45-.39-.72-.5-.27-.11-.55-.16-.85-.16s-.61.05-.87.16c-.27.11-.5.26-.7.45-.2.19-.35.42-.46.68-.11.26-.16.55-.16.86s.05.59.16.86c.11.26.26.49.46.68.2.19.43.34.7.45.27.11.56.16.87.16s.59-.05.85-.16c.27-.11.5-.28.72-.51l.52.5c-.25.29-.56.51-.93.65-.37.15-.77.22-1.2.22Z" />
                    <path class="fill-white" d="M24.85,52.63c-.43,0-.82-.07-1.18-.22s-.68-.34-.95-.6c-.27-.26-.47-.56-.62-.91-.15-.35-.22-.72-.22-1.13s.07-.79.22-1.13c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.76-.22,1.19-.22s.82.07,1.18.21c.36.14.67.34.94.6.27.26.47.56.62.91.15.35.22.73.22,1.14s-.07.8-.22,1.14c-.15.35-.35.65-.62.91-.27.26-.58.46-.94.6-.36.14-.76.21-1.18.21ZM24.85,51.92c.31,0,.6-.05.87-.16.26-.11.49-.26.69-.45.19-.19.35-.42.46-.68s.16-.55.16-.85-.05-.59-.16-.85-.26-.49-.46-.68c-.19-.2-.42-.35-.69-.45-.26-.11-.55-.16-.87-.16s-.59.05-.86.16c-.26.11-.49.26-.69.45-.2.2-.35.42-.46.68-.11.26-.16.54-.16.85s.05.59.16.85c.11.26.26.49.46.68.2.19.43.34.69.45.26.11.55.16.86.16Z" />
                    <path class="fill-white" d="M29.83,52.57v-5.59h2.18c.72,0,1.29.17,1.71.51.41.34.62.82.62,1.43,0,.4-.09.75-.28,1.04-.19.29-.45.51-.8.67s-.76.23-1.25.23h-1.74l.36-.37v2.07h-.8ZM30.63,50.58l-.36-.39h1.72c.51,0,.9-.11,1.16-.33.26-.22.4-.53.4-.93s-.13-.71-.4-.93c-.26-.22-.65-.33-1.16-.33h-1.72l.36-.4v3.3ZM33.57,52.57l-1.42-2.03h.85l1.44,2.03h-.87Z" />
                    <path class="fill-white" d="M38.06,52.63c-.43,0-.83-.07-1.22-.2-.39-.13-.69-.3-.92-.51l.29-.62c.21.19.48.34.81.46.33.12.67.18,1.03.18.32,0,.59-.04.79-.11.2-.07.35-.18.45-.31.1-.13.14-.28.14-.44,0-.19-.06-.35-.19-.46s-.29-.21-.49-.28-.42-.13-.66-.19-.48-.12-.72-.19c-.24-.07-.46-.16-.66-.28-.2-.11-.36-.26-.48-.45-.12-.19-.18-.43-.18-.73s.08-.55.23-.79c.15-.24.39-.44.7-.58.32-.15.72-.22,1.21-.22.32,0,.65.04.97.13.32.09.6.21.83.37l-.26.64c-.24-.16-.49-.28-.76-.35-.27-.07-.52-.11-.77-.11-.31,0-.57.04-.77.12-.2.08-.35.19-.44.32-.09.13-.14.28-.14.45,0,.2.06.35.19.47.12.12.29.21.49.28.2.07.42.13.66.19.24.06.48.12.72.19.24.07.46.16.66.27.2.11.36.26.48.45.12.19.18.43.18.72s-.08.54-.23.79c-.16.24-.39.44-.71.58-.32.15-.73.22-1.22.22Z" />
                    <path class="fill-white" d="M42.19,52.57v-5.59h3.94v.69h-3.14v4.2h3.26v.69h-4.05ZM42.91,50.07v-.68h2.87v.68h-2.87Z" />
                    <path class="fill-white" d="M7.85,11.98c0-.31-.01-.51-.04-.71h.79c-.03.18-.04.38-.04.71v2.09h1.92c.24,0,.38,0,.59-.04-.02.2-.03.37-.03.62v2.73c0,.33.01.57.04.81h-.73v-.38h-4.42c-.33,0-.56.02-.77.05v-.74c.22.03.4.04.74.04h4.46v-.95h-4.2c-.32,0-.51,0-.7.03v-.71c.17.03.36.04.71.04h4.19v-.85h-4.41c-.32,0-.5,0-.74.04v-.72c.22.03.43.04.76.04h1.88v-2.09ZM5.89,11.66c.54.7.84,1.16,1.16,1.83l-.62.36c-.35-.75-.64-1.22-1.15-1.85l.6-.34ZM11.11,11.94c-.44.92-.7,1.34-1.2,1.97l-.59-.36c.52-.62.78-1.08,1.13-1.92l.66.31Z" />
                    <path class="fill-white" d="M13.16,12.41c0-.29-.01-.53-.04-.78.24.03.48.04.83.04h3.53c.35,0,.57,0,.8-.04-.03.25-.04.47-.04.74v4.84c0,.38.01.61.04.86h-.76v-.47h-3.65v.47h-.76c.03-.25.04-.53.04-.86v-4.8ZM13.87,14.22h3.65v-1.89h-3.65v1.89ZM13.87,16.95h3.65v-2.08h-3.65v2.08Z" />
                    <path class="fill-white" d="M20.34,13.32c-.18,0-.34,0-.5.04v-.68c.17.03.29.04.5.04h.29v-.65c0-.36-.01-.54-.04-.77h.73c-.03.22-.04.4-.04.76v.65h.24c.18,0,.28,0,.41-.02v.65c-.15-.01-.25-.02-.41-.02h-.24v1.39c.16-.05.2-.07.4-.14v-.57c.21.03.38.04.68.04h3.53c.35,0,.56,0,.76-.04v.59c-.21-.03-.39-.04-.74-.04h-1.88v2.88c0,.35,0,.54.04.77h-.66c.03-.29.04-.47.04-.75v-.17c-.43.11-.78.19-1.4.31-.16.03-.32.07-.42.11l-.09-.62h.04c.11,0,.17,0,.44-.04v-2.47s-.1,0-.27.02v.56c-.21.08-.25.1-.48.19v2.15c0,.52-.16.65-.8.65-.12,0-.29,0-.5-.02-.02-.26-.05-.4-.14-.64.25.03.41.05.58.05s.2-.03.2-.19v-1.78c-.41.14-.66.22-.73.25l-.14-.68c.2-.02.35-.06.87-.2v-1.58h-.29ZM22.93,13.71c-.29,0-.5,0-.68.02.02-.21.03-.48.03-.72v-.89c0-.25,0-.43-.03-.63.21.02.35.03.71.03h2.42c.36,0,.51,0,.71-.03-.02.2-.03.37-.03.65v.87c0,.26,0,.52.03.72-.19-.01-.39-.02-.68-.02h-2.47ZM23.48,15v-.44h-.93v.44h.93ZM23.48,15.9v-.44h-.93v.44h.93ZM22.55,16.93c.39-.07.7-.13.93-.17v-.39h-.93v.56ZM22.91,12.4h2.51v-.38h-2.51v.38ZM22.91,13.23h2.51v-.38h-2.51v.38ZM26.47,15.26c-.05.11-.07.16-.11.28-.21.57-.38.91-.65,1.31.32.29.65.5,1.07.7-.14.15-.26.33-.37.58-.52-.33-.72-.49-1.07-.83-.29.32-.59.59-.94.82-.12-.23-.19-.32-.38-.51.38-.22.63-.42.94-.74-.24-.32-.43-.67-.63-1.14l.51-.2c.17.45.26.61.48.9.21-.31.32-.54.44-.92h-1.13c-.24,0-.33,0-.45.02v-.6c.15.02.28.03.55.03h.96c.25,0,.39,0,.5-.02l.28.33Z" />
                    <path class="fill-white" d="M28.63,16.68c-.27.56-.49.88-.94,1.33-.14-.17-.26-.28-.47-.43.46-.39.62-.6.86-1.13l.54.23ZM28.35,13.6c-.34,0-.55,0-.67.02.02-.2.03-.41.03-.63v-.87c0-.28,0-.47-.03-.65.2.02.38.03.72.03h1.97c.31,0,.52,0,.72-.03-.01.17-.02.29-.02.65v.86c0,.27,0,.44.02.63-.1-.02-.33-.02-.66-.02h-.73v.41h.97c.38,0,.53,0,.74-.04v.62c-.2-.03-.39-.04-.73-.04h-2.65c-.34,0-.54,0-.74.04v-.63c.18.04.38.05.74.05h1.02v-.41h-.71ZM28.36,16.29c-.27,0-.41,0-.56.02.02-.16.03-.28.03-.46v-.53c0-.18,0-.31-.03-.47.16.02.26.02.56.02h2.04c.3,0,.41,0,.56-.02-.02.15-.02.31-.02.47v.53c0,.16,0,.31.02.46-.16-.01-.29-.02-.56-.02h-.68v1.26c0,.24-.05.39-.17.47-.08.06-.28.09-.59.09-.12,0-.21,0-.44-.02-.02-.22-.08-.43-.14-.62.19.04.38.07.55.07.14,0,.17-.02.17-.15v-1.1h-.73ZM28.33,12.33h2.13v-.34h-2.13v.34ZM28.33,13.12h2.13v-.35h-2.13v.35ZM28.44,15.82h1.89v-.45h-1.89v.45ZM30.64,17.79c-.23-.49-.34-.69-.62-1.1l.49-.21c.25.35.46.68.61.95.7-.32,1.31-.75,1.94-1.36.28-.27.48-.51.62-.73l.56.5q-.24.23-.37.36c-.5.55-.74.76-1.19,1.1-.44.34-.74.53-1.29.81-.11-.22-.17-.31-.35-.53l-.39.21ZM34.04,13.7c-.1.09-.18.16-.3.28-.72.74-1.31,1.19-2.18,1.67-.11-.25-.23-.42-.4-.62.59-.25,1.17-.63,1.73-1.14.31-.3.47-.47.58-.66l.57.47ZM33.84,11.74c-.11.1-.16.14-.77.71-.39.36-.83.66-1.46,1.01-.13-.26-.23-.39-.41-.6.61-.26,1.07-.56,1.54-1.01.26-.24.34-.32.51-.56l.59.44Z" />
                    <path class="fill-white" d="M38.58,17.33h-.76v-2.25h-2.24v-.75h2.24v-2.18h.76v2.18h2.24v.75h-2.24v2.25Z" />
                    <path class="fill-white" d="M44.01,13.97c.41.32.62.51.9.83.26-.62.38-1.03.54-1.9h-1.22c-.35.88-.81,1.61-1.46,2.32-.14-.27-.2-.36-.43-.59.63-.65,1.11-1.46,1.44-2.42.1-.29.2-.73.23-.96l.74.14c-.07.16-.09.23-.15.43-.04.17-.08.29-.15.49h1.12c.29,0,.43,0,.6-.02-.03.15-.03.19-.06.39.17.42.45.87.81,1.29v-1.82c0-.35-.01-.56-.05-.83h.79c-.04.27-.05.47-.05.83v2.48c.54.44,1.15.8,1.78,1.05-.14.18-.26.41-.38.68-.55-.29-.97-.57-1.4-.9v1.73c0,.44.01.65.05.96h-.79c.04-.3.05-.55.05-.96v-2.35c-.43-.44-.68-.78-.95-1.26-.2,1-.54,1.89-1.02,2.61-.46.71-1.14,1.4-1.91,1.94-.15-.25-.3-.42-.51-.57.53-.33,1-.72,1.43-1.22.26-.3.44-.56.66-.93-.31-.37-.57-.62-.98-.92l.38-.51Z" />
                    <path class="fill-white" d="M52.79,12.03c0-.35-.02-.53-.05-.72h.81c-.04.22-.05.39-.05.72v1.75h1.76v-1.31c0-.23,0-.4-.03-.57h.77c-.03.22-.04.37-.04.62v1.49c0,.19,0,.32.02.44-.17-.01-.33-.02-.5-.02h-1.97v2.58h2.01v-1.32c0-.26,0-.45-.04-.64h.77c-.02.18-.04.4-.04.69v1.65c0,.33.02.51.05.71h-.74v-.41h-4.63v.41h-.74c.03-.2.04-.42.04-.71v-1.61c0-.29,0-.5-.04-.7h.77c-.03.17-.04.35-.04.65v1.28h1.92v-2.58h-1.82c-.18,0-.34,0-.52.02.01-.15.02-.3.02-.44v-1.49c0-.23-.01-.42-.04-.62h.77c-.02.15-.03.34-.03.58v1.3h1.62v-1.75Z" />
                  </g>
                </svg>
                <span class="js-tab-triangle opacity-0 invisible absolute -bottom-32 left-1/2 -translate-x-1/2 w-0 h-0 border-solid border-x-16 border-x-transparent border-b-28 border-b-pale-pink border-t-0 duration-500"></span>
              </button>
              <button class="relative w-62 pc:w-118 group" id="tab2-btn" data-tab="tab2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.18 61.18">
                  <g>
                    <rect class="fill-light-gray pc:group-hover:fill-green duration-500" width="61.18" height="61.18" />
                    <path class="fill-white" d="M24.55,40.1v-16.45h7.38c1.9,0,3.35.38,4.37,1.14,1.02.76,1.53,1.8,1.53,3.11,0,.89-.2,1.65-.6,2.26-.4.61-.94,1.08-1.61,1.41-.67.33-1.4.49-2.19.49l.42-.7c.94,0,1.77.16,2.49.49s1.29.81,1.72,1.45c.42.63.63,1.42.63,2.36,0,1.41-.53,2.5-1.59,3.28s-2.63,1.16-4.71,1.16h-7.85ZM26.9,38.2h5.41c1.3,0,2.29-.22,2.98-.66.69-.44,1.03-1.13,1.03-2.07s-.34-1.65-1.03-2.09c-.69-.44-1.68-.66-2.98-.66h-5.62v-1.9h5.03c1.19,0,2.12-.22,2.77-.66.66-.44.99-1.1.99-1.97s-.33-1.54-.99-1.97c-.66-.44-1.58-.66-2.77-.66h-4.82v12.64Z" />
                    <path class="fill-white" d="M18.34,52.63c-.43,0-.82-.07-1.18-.21-.36-.14-.67-.34-.93-.6-.26-.26-.47-.56-.62-.91-.15-.35-.22-.73-.22-1.14s.07-.8.22-1.14c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.75-.21,1.18-.21s.83.07,1.19.22c.36.15.67.36.93.65l-.52.5c-.21-.22-.45-.39-.72-.5-.27-.11-.55-.16-.85-.16s-.61.05-.87.16c-.27.11-.5.26-.7.45-.2.19-.35.42-.46.68-.11.26-.16.55-.16.86s.05.59.16.86c.11.26.26.49.46.68.2.19.43.34.7.45.27.11.56.16.87.16s.59-.05.85-.16c.27-.11.5-.28.72-.51l.52.5c-.25.29-.56.51-.93.65-.37.15-.77.22-1.2.22Z" />
                    <path class="fill-white" d="M24.85,52.63c-.43,0-.82-.07-1.18-.22s-.68-.34-.95-.6c-.27-.26-.47-.56-.62-.91-.15-.35-.22-.72-.22-1.13s.07-.79.22-1.13c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.76-.22,1.19-.22s.82.07,1.18.21c.36.14.67.34.94.6.27.26.47.56.62.91.15.35.22.73.22,1.14s-.07.8-.22,1.14c-.15.35-.35.65-.62.91-.27.26-.58.46-.94.6-.36.14-.76.21-1.18.21ZM24.84,51.92c.31,0,.6-.05.87-.16.26-.11.49-.26.69-.45.19-.19.35-.42.46-.68s.16-.55.16-.85-.05-.59-.16-.85-.26-.49-.46-.68c-.19-.2-.42-.35-.69-.45-.26-.11-.55-.16-.87-.16s-.59.05-.86.16c-.26.11-.49.26-.69.45-.2.2-.35.42-.46.68-.11.26-.16.54-.16.85s.05.59.16.85c.11.26.26.49.46.68.2.19.43.34.69.45.26.11.55.16.86.16Z" />
                    <path class="fill-white" d="M29.83,52.57v-5.59h2.18c.72,0,1.29.17,1.71.51.41.34.62.82.62,1.43,0,.4-.09.75-.28,1.04-.19.29-.45.51-.8.67s-.76.23-1.25.23h-1.74l.36-.37v2.07h-.8ZM30.63,50.58l-.36-.39h1.72c.51,0,.9-.11,1.16-.33.26-.22.4-.53.4-.93s-.13-.71-.4-.93c-.26-.22-.65-.33-1.16-.33h-1.72l.36-.4v3.3ZM33.57,52.57l-1.42-2.03h.85l1.44,2.03h-.87Z" />
                    <path class="fill-white" d="M38.06,52.63c-.43,0-.83-.07-1.22-.2-.39-.13-.69-.3-.92-.51l.29-.62c.21.19.48.34.81.46.33.12.67.18,1.03.18.32,0,.59-.04.79-.11.2-.07.35-.18.45-.31.1-.13.14-.28.14-.44,0-.19-.06-.35-.19-.46s-.29-.21-.49-.28-.42-.13-.66-.19-.48-.12-.72-.19c-.24-.07-.46-.16-.66-.28-.2-.11-.36-.26-.48-.45-.12-.19-.18-.43-.18-.73s.08-.55.23-.79c.15-.24.39-.44.7-.58.32-.15.72-.22,1.21-.22.32,0,.65.04.97.13.32.09.6.21.83.37l-.26.64c-.24-.16-.49-.28-.76-.35-.27-.07-.52-.11-.77-.11-.31,0-.57.04-.77.12-.2.08-.35.19-.44.32-.09.13-.14.28-.14.45,0,.2.06.35.19.47.12.12.29.21.49.28.2.07.42.13.66.19.24.06.48.12.72.19.24.07.46.16.66.27.2.11.36.26.48.45.12.19.18.43.18.72s-.08.54-.23.79c-.16.24-.39.44-.71.58-.32.15-.73.22-1.22.22Z" />
                    <path class="fill-white" d="M42.19,52.57v-5.59h3.94v.69h-3.14v4.2h3.26v.69h-4.05ZM42.91,50.07v-.68h2.87v.68h-2.87Z" />
                    <path class="fill-white" d="M8.36,11.98c0-.31-.01-.51-.04-.71h.79c-.03.18-.04.38-.04.71v2.09h1.92c.24,0,.38,0,.59-.04-.02.2-.03.37-.03.62v2.73c0,.33.01.57.04.81h-.73v-.38h-4.42c-.33,0-.56.02-.77.05v-.74c.22.03.4.04.74.04h4.46v-.95h-4.2c-.32,0-.51,0-.7.03v-.71c.17.03.36.04.71.04h4.19v-.85h-4.41c-.32,0-.5,0-.74.04v-.72c.22.03.43.04.76.04h1.88v-2.09ZM6.4,11.66c.54.7.84,1.16,1.16,1.83l-.62.36c-.35-.75-.64-1.22-1.15-1.85l.6-.34ZM11.61,11.94c-.44.92-.7,1.34-1.2,1.97l-.58-.36c.52-.62.78-1.08,1.13-1.92l.66.31Z" />
                    <path class="fill-white" d="M13.66,12.41c0-.29-.01-.53-.04-.78.24.03.48.04.83.04h3.53c.35,0,.57,0,.8-.04-.03.25-.04.47-.04.74v4.84c0,.38.02.61.04.86h-.76v-.47h-3.65v.47h-.76c.03-.25.04-.53.04-.86v-4.8ZM14.38,14.22h3.65v-1.89h-3.65v1.89ZM14.38,16.95h3.65v-2.08h-3.65v2.08Z" />
                    <path class="fill-white" d="M22.01,13.97c.41.32.62.51.9.83.26-.62.38-1.03.54-1.9h-1.22c-.35.88-.81,1.61-1.46,2.32-.14-.27-.2-.36-.43-.59.63-.65,1.11-1.46,1.44-2.42.1-.29.2-.73.23-.96l.74.14c-.07.16-.09.23-.15.43-.04.17-.08.29-.15.49h1.12c.29,0,.43,0,.6-.02-.03.15-.03.19-.06.39.17.42.45.87.81,1.29v-1.82c0-.35-.01-.56-.05-.83h.79c-.04.27-.05.47-.05.83v2.48c.54.44,1.15.8,1.78,1.05-.14.18-.26.41-.38.68-.55-.29-.97-.57-1.4-.9v1.73c0,.44.01.65.05.96h-.79c.04-.3.05-.55.05-.96v-2.35c-.43-.44-.68-.78-.95-1.26-.2,1-.54,1.89-1.02,2.61-.46.71-1.14,1.4-1.91,1.94-.15-.25-.3-.42-.51-.57.53-.33,1-.72,1.43-1.22.26-.3.44-.56.66-.93-.31-.37-.57-.62-.98-.92l.38-.51Z" />
                    <path class="fill-white" d="M30.8,12.03c0-.35-.02-.53-.05-.72h.81c-.04.22-.05.39-.05.72v1.75h1.76v-1.31c0-.23,0-.4-.03-.57h.77c-.03.22-.04.37-.04.62v1.49c0,.19,0,.32.02.44-.17-.02-.33-.02-.5-.02h-1.97v2.58h2.01v-1.32c0-.26,0-.45-.04-.64h.77c-.02.18-.04.4-.04.69v1.65c0,.33.02.51.05.71h-.74v-.41h-4.63v.41h-.74c.03-.2.04-.42.04-.71v-1.61c0-.29,0-.5-.04-.7h.77c-.03.17-.04.35-.04.65v1.28h1.92v-2.58h-1.82c-.18,0-.34,0-.52.02.02-.15.02-.3.02-.44v-1.49c0-.23-.01-.42-.04-.62h.77c-.02.15-.03.34-.03.58v1.3h1.62v-1.75Z" />
                    <path class="fill-white" d="M37.98,12.16c-.03.1-.04.13-.06.28-.11.88-.3,1.76-.51,2.42-.33,1.06-.79,1.88-1.47,2.66-.3-.29-.4-.37-.71-.54.45-.44.77-.89,1.08-1.55.33-.69.61-1.65.74-2.58.05-.33.07-.56.07-.83l.86.16ZM40.09,12c.02.42.15,1.1.33,1.76.36,1.36.88,2.34,1.68,3.19-.32.2-.42.29-.68.58-.41-.48-.67-.86-.99-1.5-.39-.77-.68-1.6-.87-2.54-.07-.29-.09-.41-.2-1.1-.02-.11-.03-.14-.05-.24l.77-.15ZM42.3,12.35c0,.48-.39.87-.87.87s-.86-.39-.86-.87.38-.87.86-.87.87.39.87.87ZM40.92,12.35c0,.28.23.51.5.51s.51-.23.51-.51-.23-.51-.51-.51-.5.23-.5.51Z" />
                    <path class="fill-white" d="M44.39,13.31c.32.55.46.9.74,1.73l-.71.23c-.19-.71-.36-1.16-.69-1.76l.66-.21ZM48.67,13.33c-.04.11-.05.14-.1.36-.22,1.02-.57,1.85-1.07,2.51-.53.71-1.18,1.22-2.21,1.73-.16-.27-.24-.37-.51-.62.52-.2.82-.37,1.25-.68.88-.64,1.39-1.42,1.72-2.62.11-.36.15-.62.15-.86l.77.17ZM45.97,13.01c.4.73.53,1.05.73,1.68l-.7.23c-.14-.56-.37-1.13-.68-1.71l.65-.2Z" />
                    <path class="fill-white" d="M53.87,11.59q-.06.08-.16.29c-.16.35-.21.47-.31.63.06,0,.17-.02.32-.02l1.79-.02c.28,0,.35-.01.48-.06l.42.41c-.08.1-.1.15-.17.41-.34,1.12-.88,2.12-1.52,2.87-.69.79-1.52,1.39-2.65,1.89-.17-.31-.26-.41-.53-.65,1.14-.47,1.89-.98,2.6-1.79.55-.64.99-1.46,1.28-2.39l-2.37.04c-.5.77-1.07,1.39-1.76,1.92-.2-.26-.29-.35-.61-.54.83-.56,1.38-1.17,1.92-2.13.25-.46.38-.77.42-1.04l.86.19Z" />
                  </g>
                </svg>
                <span class="js-tab-triangle opacity-0 invisible absolute -bottom-32 left-1/2 -translate-x-1/2 w-0 h-0 border-solid border-x-16 border-x-transparent border-b-28 border-b-pale-green border-t-0 duration-500"></span>
              </button>
            </div>

            <div class="mt-14 pc:mt-28">
              <div id="tab1" class="tab-cont bg-pale-pink pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">
                <div class="relative flex flex-col items-center gap-24 pc:gap-32">
                  <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div>
                        <div class="flex items-center gap-x-12 pc:gap-x-24">
                          <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                            <span class="text-8 pc:text-16 leading-none half-leading">基本価格</span>
                          </div>
                          <span class="text-17 pc:text-33 leading-none half-leading">¥37,400</span>
                        </div>
                      </div>
                      <div class="w-14 pc:w-23">
                        <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/circle-plus.svg" alt="プラス" class="w-full" width="23" height="23">
                      </div>
                      <div class="flex items-center gap-x-8 pc:gap-x-12">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">衣装代</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥22,000~</span>
                      </div>
                    </div>
                    <div class="ml-38 pc:ml-64">
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">+¥5,500</span>
                      </div>
                    </div>
                    <div class="max-md:w-full md:ml-80">
                      <p class="text-10 pc:text-25 max-md:text-center">所要時間：2時間</p>
                    </div>
                  </div>
                  <div class="flex flex-col pc:flex-row items-center gap-y-24 gap-x-24">
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/graduation-hakama/hakamaA01.svg" alt="" class="w-full" width="295" height="54">
                    </div>
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/graduation-hakama/hakamaA02.svg" alt="" class="w-full" width="295" height="54">
                    </div>
                  </div>
                  <div class="w-full h-px bg-black"></div>
                  <div class="w-full pc:w-auto">
                    <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-24 pc:gap-x-80 gap-y-24">
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-32 pc:w-50">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/data.svg" alt="" class="w-full" width="79" height="79">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            カメラマンセレクト<br>
                            20カット
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-48 pc:w-72">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/isyou01.svg" alt="" class="w-full" width="107" height="109">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            衣装　1着
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-80 pc:w-120">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/kitukehair.svg" alt="" class="w-full" width="56" height="31">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            着付け/ヘア
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-82">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/satuei.svg" alt="" class="w-full" width="132" height="100">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            撮影
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-88">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/gaisyutu.svg" alt="" class="w-full" width="57" height="33">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            外出
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※着付け/ヘアは本人分のみとなっております。</p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※10時前は早朝料金別途¥2,200</p>
                    </div>

                    <div class="mt-32 pc:mt-48">
                      <div class="mx-auto w-full md:w-560 pc:w-880">
                        <div class="bg-[#B0B0B0] h-24 pc:h-36 flex justify-center items-center">
                          <span class="text-12 pc:text-16">
                            衣装代（グレード別）
                          </span>
                        </div>
                        <div class="bg-white pt-8 pc:pt-12 pb-4 pc:pb-8 px-64">
                          <div class="grid grid-cols-3 md:grid-cols-6 gap-24 pc:gap-32">
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Agrade.svg" alt="Aグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥22,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Bgrade.svg" alt="Bグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥33,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Cgrade.svg" alt="Cグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥44,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Dgrade.svg" alt="Dグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥55,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Egrade.svg" alt="Eグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥66,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Sgrade.svg" alt="Sグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥88,000</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mt-24 pc:mt-32">
                      <div class="border border-border flex flex-col">
                        <div class="bg-black h-35 pc:h-60 flex justify-center items-center">
                          <h3 class="text-12 pc:text-20 text-white">衣装1着詳細</h3>
                        </div>
                        <div class="bg-white py-12 pc:py-24 px-16 md:px-40 pc:px-160 flex pc:justify-center">
                          <p class="text-10 pc:text-20 leading-[1.5]">
                            着物・長襦袢・袴・袴下帯・草履＆バッグ
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <div class="border border-border flex flex-col">
                        <div class="bg-[#E40063] h-35 pc:h-60 flex justify-center items-center">
                          <h3 class="text-12 pc:text-20 text-white">ご持参頂くもの</h3>
                        </div>
                        <div class="bg-white py-12 pc:py-24 px-16 md:px-40 pc:px-160 flex pc:justify-center">
                          <p class="text-10 pc:text-20 leading-[1.5]">
                            肌襦袢・裾よけ・足袋・髪飾り<br>
                            ※当店での販売も致しております。オプション参照
                          </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="tab2" class="tab-cont hidden bg-pale-green pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">
                <div class="relative flex flex-col items-center gap-24 pc:gap-32">
                  <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div>
                        <div class="flex items-center gap-x-12 pc:gap-x-24">
                          <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                            <span class="text-8 pc:text-16 leading-none half-leading">基本価格</span>
                          </div>
                          <span class="text-17 pc:text-33 leading-none half-leading">¥23,100</span>
                        </div>
                      </div>
                      <div class="w-14 pc:w-23">
                        <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/circle-plus.svg" alt="プラス" class="w-full" width="23" height="23">
                      </div>
                      <div class="flex items-center gap-x-8 pc:gap-x-12">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">衣装代</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥22,000~</span>
                      </div>
                    </div>
                    <div class="ml-38 pc:ml-64">
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">+¥5,500</span>
                      </div>
                    </div>
                    <div class="max-md:w-full md:ml-80">
                      <p class="text-10 pc:text-25 max-md:text-center">所要時間：2時間</p>
                    </div>
                  </div>
                  <div class="flex justify-center">
                    <div class="md:w-568">
                      <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/graduation-hakama/hakamaB.svg" alt="" class="w-full" width="889" height="257">
                    </div>
                  </div>
                  <div class="w-full h-px bg-black"></div>
                  <div class="w-full pc:w-auto">
                    <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-24 pc:gap-x-80 gap-y-24">
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-48 pc:w-72">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/isyou01.svg" alt="" class="w-full" width="107" height="109">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            衣装　1着
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-80 pc:w-120">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/kitukehair.svg" alt="" class="w-full" width="56" height="31">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            着付け/ヘア
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-88">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/gaisyutu.svg" alt="" class="w-full" width="57" height="33">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            外出
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">
                        ※着付け/ヘアは本人分のみとなっております。
                      </p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">
                        ※10時前は早朝料金別途¥2,200</p>
                    </div>

                    <div class="mt-32 pc:mt-48">
                      <div class="mx-auto w-full md:w-560 pc:w-880">
                        <div class="bg-[#B0B0B0] h-24 pc:h-36 flex justify-center items-center">
                          <span class="text-12 pc:text-16">
                            衣装代（グレード別）
                          </span>
                        </div>
                        <div class="bg-white pt-8 pc:pt-12 pb-4 pc:pb-8 px-64">
                          <div class="grid grid-cols-3 md:grid-cols-6 gap-24 pc:gap-32">
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Agrade.svg" alt="Aグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥44,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Bgrade.svg" alt="Bグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥88,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Cgrade.svg" alt="Cグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥132,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Dgrade.svg" alt="Dグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥165,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Egrade.svg" alt="Eグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥220,000</span>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                              <div class="w-48 pc:w-88">
                                <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/Sgrade.svg" alt="Sグレード" class="w-full" width="91" height="91">
                              </div>
                              <span class="text-12 pc:text-23 leading-[1.8]">¥297,000</span>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="mt-24 pc:mt-32">
                      <div class="border border-border flex flex-col">
                        <div class="bg-black h-35 pc:h-60 flex justify-center items-center">
                          <h3 class="text-12 pc:text-20 text-white">衣装1着詳細</h3>
                        </div>
                        <div class="bg-white py-12 pc:py-24 px-16 md:px-40 pc:px-160 flex pc:justify-center">
                          <p class="text-10 pc:text-20 leading-[1.5]">
                            着物・長襦袢・袴・袴下帯・草履＆バッグ
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <div class="border border-border flex flex-col">
                        <div class="bg-[#E40063] h-35 pc:h-60 flex justify-center items-center">
                          <h3 class="text-12 pc:text-20 text-white">ご持参頂くもの</h3>
                        </div>
                        <div class="bg-white py-12 pc:py-24 px-16 md:px-40 pc:px-160 flex pc:justify-center">
                          <p class="text-10 pc:text-20 leading-[1.5]">
                            肌襦袢・裾よけ・足袋・髪飾り<br>
                            ※当店での販売も致しております。オプション参照
                          </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="mt-32 pc:mt-64">
              <div class="mx-auto md:w-full border border-border">
                <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                  <h3 class="text-12 pc:text-20 text-white">
                    オプション料金（販売価格）
                  </h3>
                </div>
                <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                  <ul class="flex flex-col pc:h-198 flex-wrap gap-x-80">
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        肌襦袢
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,320
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        裾よけ
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,430
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        足袋
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,650
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        髪飾り
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,100~
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        メイク
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥3,300
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        ブーツレンタル
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥5,500
                      </span>
                    </li>
                  </ul>

                </div>
              </div>
            </div>

          </div>
      </section>

      <section class="mt-80 pc:mt-160">
        <div class="mx-auto w-343 md:w-736 pc:w-1450">

          <div class="flex items-center flex-col gap-y-4 pc:gap-y-8">
            <h2 class="text-14 pc:text-30 font-zenMaruGothic half-leading">卒業袴 お持ち込みメニュー</h2>
          </div>

          <div class="mt-32 pc:mt-104">
            <div class="flex justify-center gap-x-36 pc:gap-x-124">
              <button class="js-tab-active relative w-62 pc:w-118 group" id="tab4-btn" data-tab2="tab4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.18 61.18">
                  <g>
                    <rect class="fill-light-gray pc:group-hover:fill-pink duration-500" width="61.18" height="61.18" />
                    <path class="fill-white" d="M22.35,40.1l7.45-16.45h2.33l7.47,16.45h-2.47l-6.65-15.13h.94l-6.65,15.13h-2.42ZM25.52,35.99l.63-1.88h9.26l.68,1.88h-10.57Z" />
                    <path class="fill-white" d="M18.34,52.63c-.43,0-.82-.07-1.18-.21-.36-.14-.67-.34-.93-.6-.26-.26-.47-.56-.62-.91-.15-.35-.22-.73-.22-1.14s.07-.8.22-1.14c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.75-.21,1.18-.21s.83.07,1.19.22c.36.15.67.36.93.65l-.52.5c-.21-.22-.45-.39-.72-.5-.27-.11-.55-.16-.85-.16s-.61.05-.87.16c-.27.11-.5.26-.7.45-.2.19-.35.42-.46.68-.11.26-.16.55-.16.86s.05.59.16.86c.11.26.26.49.46.68.2.19.43.34.7.45.27.11.56.16.87.16s.59-.05.85-.16c.27-.11.5-.28.72-.51l.52.5c-.25.29-.56.51-.93.65-.37.15-.77.22-1.2.22Z" />
                    <path class="fill-white" d="M24.85,52.63c-.43,0-.82-.07-1.18-.22s-.68-.34-.95-.6c-.27-.26-.47-.56-.62-.91-.15-.35-.22-.72-.22-1.13s.07-.79.22-1.13c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.76-.22,1.19-.22s.82.07,1.18.21c.36.14.67.34.94.6.27.26.47.56.62.91.15.35.22.73.22,1.14s-.07.8-.22,1.14c-.15.35-.35.65-.62.91-.27.26-.58.46-.94.6-.36.14-.76.21-1.18.21ZM24.85,51.92c.31,0,.6-.05.87-.16.26-.11.49-.26.69-.45.19-.19.35-.42.46-.68s.16-.55.16-.85-.05-.59-.16-.85-.26-.49-.46-.68c-.19-.2-.42-.35-.69-.45-.26-.11-.55-.16-.87-.16s-.59.05-.86.16c-.26.11-.49.26-.69.45-.2.2-.35.42-.46.68-.11.26-.16.54-.16.85s.05.59.16.85c.11.26.26.49.46.68.2.19.43.34.69.45.26.11.55.16.86.16Z" />
                    <path class="fill-white" d="M29.83,52.57v-5.59h2.18c.72,0,1.29.17,1.71.51.41.34.62.82.62,1.43,0,.4-.09.75-.28,1.04-.19.29-.45.51-.8.67s-.76.23-1.25.23h-1.74l.36-.37v2.07h-.8ZM30.63,50.58l-.36-.39h1.72c.51,0,.9-.11,1.16-.33.26-.22.4-.53.4-.93s-.13-.71-.4-.93c-.26-.22-.65-.33-1.16-.33h-1.72l.36-.4v3.3ZM33.57,52.57l-1.42-2.03h.85l1.44,2.03h-.87Z" />
                    <path class="fill-white" d="M38.06,52.63c-.43,0-.83-.07-1.22-.2-.39-.13-.69-.3-.92-.51l.29-.62c.21.19.48.34.81.46.33.12.67.18,1.03.18.32,0,.59-.04.79-.11.2-.07.35-.18.45-.31.1-.13.14-.28.14-.44,0-.19-.06-.35-.19-.46s-.29-.21-.49-.28-.42-.13-.66-.19-.48-.12-.72-.19c-.24-.07-.46-.16-.66-.28-.2-.11-.36-.26-.48-.45-.12-.19-.18-.43-.18-.73s.08-.55.23-.79c.15-.24.39-.44.7-.58.32-.15.72-.22,1.21-.22.32,0,.65.04.97.13.32.09.6.21.83.37l-.26.64c-.24-.16-.49-.28-.76-.35-.27-.07-.52-.11-.77-.11-.31,0-.57.04-.77.12-.2.08-.35.19-.44.32-.09.13-.14.28-.14.45,0,.2.06.35.19.47.12.12.29.21.49.28.2.07.42.13.66.19.24.06.48.12.72.19.24.07.46.16.66.27.2.11.36.26.48.45.12.19.18.43.18.72s-.08.54-.23.79c-.16.24-.39.44-.71.58-.32.15-.73.22-1.22.22Z" />
                    <path class="fill-white" d="M42.19,52.57v-5.59h3.94v.69h-3.14v4.2h3.26v.69h-4.05ZM42.91,50.07v-.68h2.87v.68h-2.87Z" />
                    <path class="fill-white" d="M7.85,11.98c0-.31-.01-.51-.04-.71h.79c-.03.18-.04.38-.04.71v2.09h1.92c.24,0,.38,0,.59-.04-.02.2-.03.37-.03.62v2.73c0,.33.01.57.04.81h-.73v-.38h-4.42c-.33,0-.56.02-.77.05v-.74c.22.03.4.04.74.04h4.46v-.95h-4.2c-.32,0-.51,0-.7.03v-.71c.17.03.36.04.71.04h4.19v-.85h-4.41c-.32,0-.5,0-.74.04v-.72c.22.03.43.04.76.04h1.88v-2.09ZM5.89,11.66c.54.7.84,1.16,1.16,1.83l-.62.36c-.35-.75-.64-1.22-1.15-1.85l.6-.34ZM11.11,11.94c-.44.92-.7,1.34-1.2,1.97l-.59-.36c.52-.62.78-1.08,1.13-1.92l.66.31Z" />
                    <path class="fill-white" d="M13.16,12.41c0-.29-.01-.53-.04-.78.24.03.48.04.83.04h3.53c.35,0,.57,0,.8-.04-.03.25-.04.47-.04.74v4.84c0,.38.01.61.04.86h-.76v-.47h-3.65v.47h-.76c.03-.25.04-.53.04-.86v-4.8ZM13.87,14.22h3.65v-1.89h-3.65v1.89ZM13.87,16.95h3.65v-2.08h-3.65v2.08Z" />
                    <path class="fill-white" d="M20.34,13.32c-.18,0-.34,0-.5.04v-.68c.17.03.29.04.5.04h.29v-.65c0-.36-.01-.54-.04-.77h.73c-.03.22-.04.4-.04.76v.65h.24c.18,0,.28,0,.41-.02v.65c-.15-.01-.25-.02-.41-.02h-.24v1.39c.16-.05.2-.07.4-.14v-.57c.21.03.38.04.68.04h3.53c.35,0,.56,0,.76-.04v.59c-.21-.03-.39-.04-.74-.04h-1.88v2.88c0,.35,0,.54.04.77h-.66c.03-.29.04-.47.04-.75v-.17c-.43.11-.78.19-1.4.31-.16.03-.32.07-.42.11l-.09-.62h.04c.11,0,.17,0,.44-.04v-2.47s-.1,0-.27.02v.56c-.21.08-.25.1-.48.19v2.15c0,.52-.16.65-.8.65-.12,0-.29,0-.5-.02-.02-.26-.05-.4-.14-.64.25.03.41.05.58.05s.2-.03.2-.19v-1.78c-.41.14-.66.22-.73.25l-.14-.68c.2-.02.35-.06.87-.2v-1.58h-.29ZM22.93,13.71c-.29,0-.5,0-.68.02.02-.21.03-.48.03-.72v-.89c0-.25,0-.43-.03-.63.21.02.35.03.71.03h2.42c.36,0,.51,0,.71-.03-.02.2-.03.37-.03.65v.87c0,.26,0,.52.03.72-.19-.01-.39-.02-.68-.02h-2.47ZM23.48,15v-.44h-.93v.44h.93ZM23.48,15.9v-.44h-.93v.44h.93ZM22.55,16.93c.39-.07.7-.13.93-.17v-.39h-.93v.56ZM22.91,12.4h2.51v-.38h-2.51v.38ZM22.91,13.23h2.51v-.38h-2.51v.38ZM26.47,15.26c-.05.11-.07.16-.11.28-.21.57-.38.91-.65,1.31.32.29.65.5,1.07.7-.14.15-.26.33-.37.58-.52-.33-.72-.49-1.07-.83-.29.32-.59.59-.94.82-.12-.23-.19-.32-.38-.51.38-.22.63-.42.94-.74-.24-.32-.43-.67-.63-1.14l.51-.2c.17.45.26.61.48.9.21-.31.32-.54.44-.92h-1.13c-.24,0-.33,0-.45.02v-.6c.15.02.28.03.55.03h.96c.25,0,.39,0,.5-.02l.28.33Z" />
                    <path class="fill-white" d="M28.63,16.68c-.27.56-.49.88-.94,1.33-.14-.17-.26-.28-.47-.43.46-.39.62-.6.86-1.13l.54.23ZM28.35,13.6c-.34,0-.55,0-.67.02.02-.2.03-.41.03-.63v-.87c0-.28,0-.47-.03-.65.2.02.38.03.72.03h1.97c.31,0,.52,0,.72-.03-.01.17-.02.29-.02.65v.86c0,.27,0,.44.02.63-.1-.02-.33-.02-.66-.02h-.73v.41h.97c.38,0,.53,0,.74-.04v.62c-.2-.03-.39-.04-.73-.04h-2.65c-.34,0-.54,0-.74.04v-.63c.18.04.38.05.74.05h1.02v-.41h-.71ZM28.36,16.29c-.27,0-.41,0-.56.02.02-.16.03-.28.03-.46v-.53c0-.18,0-.31-.03-.47.16.02.26.02.56.02h2.04c.3,0,.41,0,.56-.02-.02.15-.02.31-.02.47v.53c0,.16,0,.31.02.46-.16-.01-.29-.02-.56-.02h-.68v1.26c0,.24-.05.39-.17.47-.08.06-.28.09-.59.09-.12,0-.21,0-.44-.02-.02-.22-.08-.43-.14-.62.19.04.38.07.55.07.14,0,.17-.02.17-.15v-1.1h-.73ZM28.33,12.33h2.13v-.34h-2.13v.34ZM28.33,13.12h2.13v-.35h-2.13v.35ZM28.44,15.82h1.89v-.45h-1.89v.45ZM30.64,17.79c-.23-.49-.34-.69-.62-1.1l.49-.21c.25.35.46.68.61.95.7-.32,1.31-.75,1.94-1.36.28-.27.48-.51.62-.73l.56.5q-.24.23-.37.36c-.5.55-.74.76-1.19,1.1-.44.34-.74.53-1.29.81-.11-.22-.17-.31-.35-.53l-.39.21ZM34.04,13.7c-.1.09-.18.16-.3.28-.72.74-1.31,1.19-2.18,1.67-.11-.25-.23-.42-.4-.62.59-.25,1.17-.63,1.73-1.14.31-.3.47-.47.58-.66l.57.47ZM33.84,11.74c-.11.1-.16.14-.77.71-.39.36-.83.66-1.46,1.01-.13-.26-.23-.39-.41-.6.61-.26,1.07-.56,1.54-1.01.26-.24.34-.32.51-.56l.59.44Z" />
                    <path class="fill-white" d="M38.58,17.33h-.76v-2.25h-2.24v-.75h2.24v-2.18h.76v2.18h2.24v.75h-2.24v2.25Z" />
                    <path class="fill-white" d="M44.01,13.97c.41.32.62.51.9.83.26-.62.38-1.03.54-1.9h-1.22c-.35.88-.81,1.61-1.46,2.32-.14-.27-.2-.36-.43-.59.63-.65,1.11-1.46,1.44-2.42.1-.29.2-.73.23-.96l.74.14c-.07.16-.09.23-.15.43-.04.17-.08.29-.15.49h1.12c.29,0,.43,0,.6-.02-.03.15-.03.19-.06.39.17.42.45.87.81,1.29v-1.82c0-.35-.01-.56-.05-.83h.79c-.04.27-.05.47-.05.83v2.48c.54.44,1.15.8,1.78,1.05-.14.18-.26.41-.38.68-.55-.29-.97-.57-1.4-.9v1.73c0,.44.01.65.05.96h-.79c.04-.3.05-.55.05-.96v-2.35c-.43-.44-.68-.78-.95-1.26-.2,1-.54,1.89-1.02,2.61-.46.71-1.14,1.4-1.91,1.94-.15-.25-.3-.42-.51-.57.53-.33,1-.72,1.43-1.22.26-.3.44-.56.66-.93-.31-.37-.57-.62-.98-.92l.38-.51Z" />
                    <path class="fill-white" d="M52.79,12.03c0-.35-.02-.53-.05-.72h.81c-.04.22-.05.39-.05.72v1.75h1.76v-1.31c0-.23,0-.4-.03-.57h.77c-.03.22-.04.37-.04.62v1.49c0,.19,0,.32.02.44-.17-.01-.33-.02-.5-.02h-1.97v2.58h2.01v-1.32c0-.26,0-.45-.04-.64h.77c-.02.18-.04.4-.04.69v1.65c0,.33.02.51.05.71h-.74v-.41h-4.63v.41h-.74c.03-.2.04-.42.04-.71v-1.61c0-.29,0-.5-.04-.7h.77c-.03.17-.04.35-.04.65v1.28h1.92v-2.58h-1.82c-.18,0-.34,0-.52.02.01-.15.02-.3.02-.44v-1.49c0-.23-.01-.42-.04-.62h.77c-.02.15-.03.34-.03.58v1.3h1.62v-1.75Z" />
                  </g>
                </svg>
                <span class="js-tab-triangle opacity-0 invisible absolute -bottom-32 left-1/2 -translate-x-1/2 w-0 h-0 border-solid border-x-16 border-x-transparent border-b-28 border-b-pale-pink border-t-0 duration-500"></span>
              </button>
              <button class="relative w-62 pc:w-118 group" id="tab5-btn" data-tab2="tab5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.18 61.18">
                  <g>
                    <rect class="fill-light-gray pc:group-hover:fill-green duration-500" width="61.18" height="61.18" />
                    <path class="fill-white" d="M24.55,40.1v-16.45h7.38c1.9,0,3.35.38,4.37,1.14,1.02.76,1.53,1.8,1.53,3.11,0,.89-.2,1.65-.6,2.26-.4.61-.94,1.08-1.61,1.41-.67.33-1.4.49-2.19.49l.42-.7c.94,0,1.77.16,2.49.49s1.29.81,1.72,1.45c.42.63.63,1.42.63,2.36,0,1.41-.53,2.5-1.59,3.28s-2.63,1.16-4.71,1.16h-7.85ZM26.9,38.2h5.41c1.3,0,2.29-.22,2.98-.66.69-.44,1.03-1.13,1.03-2.07s-.34-1.65-1.03-2.09c-.69-.44-1.68-.66-2.98-.66h-5.62v-1.9h5.03c1.19,0,2.12-.22,2.77-.66.66-.44.99-1.1.99-1.97s-.33-1.54-.99-1.97c-.66-.44-1.58-.66-2.77-.66h-4.82v12.64Z" />
                    <path class="fill-white" d="M18.34,52.63c-.43,0-.82-.07-1.18-.21-.36-.14-.67-.34-.93-.6-.26-.26-.47-.56-.62-.91-.15-.35-.22-.73-.22-1.14s.07-.8.22-1.14c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.75-.21,1.18-.21s.83.07,1.19.22c.36.15.67.36.93.65l-.52.5c-.21-.22-.45-.39-.72-.5-.27-.11-.55-.16-.85-.16s-.61.05-.87.16c-.27.11-.5.26-.7.45-.2.19-.35.42-.46.68-.11.26-.16.55-.16.86s.05.59.16.86c.11.26.26.49.46.68.2.19.43.34.7.45.27.11.56.16.87.16s.59-.05.85-.16c.27-.11.5-.28.72-.51l.52.5c-.25.29-.56.51-.93.65-.37.15-.77.22-1.2.22Z" />
                    <path class="fill-white" d="M24.85,52.63c-.43,0-.82-.07-1.18-.22s-.68-.34-.95-.6c-.27-.26-.47-.56-.62-.91-.15-.35-.22-.72-.22-1.13s.07-.79.22-1.13c.15-.35.36-.65.62-.91.27-.26.58-.46.94-.6.36-.14.76-.22,1.19-.22s.82.07,1.18.21c.36.14.67.34.94.6.27.26.47.56.62.91.15.35.22.73.22,1.14s-.07.8-.22,1.14c-.15.35-.35.65-.62.91-.27.26-.58.46-.94.6-.36.14-.76.21-1.18.21ZM24.84,51.92c.31,0,.6-.05.87-.16.26-.11.49-.26.69-.45.19-.19.35-.42.46-.68s.16-.55.16-.85-.05-.59-.16-.85-.26-.49-.46-.68c-.19-.2-.42-.35-.69-.45-.26-.11-.55-.16-.87-.16s-.59.05-.86.16c-.26.11-.49.26-.69.45-.2.2-.35.42-.46.68-.11.26-.16.54-.16.85s.05.59.16.85c.11.26.26.49.46.68.2.19.43.34.69.45.26.11.55.16.86.16Z" />
                    <path class="fill-white" d="M29.83,52.57v-5.59h2.18c.72,0,1.29.17,1.71.51.41.34.62.82.62,1.43,0,.4-.09.75-.28,1.04-.19.29-.45.51-.8.67s-.76.23-1.25.23h-1.74l.36-.37v2.07h-.8ZM30.63,50.58l-.36-.39h1.72c.51,0,.9-.11,1.16-.33.26-.22.4-.53.4-.93s-.13-.71-.4-.93c-.26-.22-.65-.33-1.16-.33h-1.72l.36-.4v3.3ZM33.57,52.57l-1.42-2.03h.85l1.44,2.03h-.87Z" />
                    <path class="fill-white" d="M38.06,52.63c-.43,0-.83-.07-1.22-.2-.39-.13-.69-.3-.92-.51l.29-.62c.21.19.48.34.81.46.33.12.67.18,1.03.18.32,0,.59-.04.79-.11.2-.07.35-.18.45-.31.1-.13.14-.28.14-.44,0-.19-.06-.35-.19-.46s-.29-.21-.49-.28-.42-.13-.66-.19-.48-.12-.72-.19c-.24-.07-.46-.16-.66-.28-.2-.11-.36-.26-.48-.45-.12-.19-.18-.43-.18-.73s.08-.55.23-.79c.15-.24.39-.44.7-.58.32-.15.72-.22,1.21-.22.32,0,.65.04.97.13.32.09.6.21.83.37l-.26.64c-.24-.16-.49-.28-.76-.35-.27-.07-.52-.11-.77-.11-.31,0-.57.04-.77.12-.2.08-.35.19-.44.32-.09.13-.14.28-.14.45,0,.2.06.35.19.47.12.12.29.21.49.28.2.07.42.13.66.19.24.06.48.12.72.19.24.07.46.16.66.27.2.11.36.26.48.45.12.19.18.43.18.72s-.08.54-.23.79c-.16.24-.39.44-.71.58-.32.15-.73.22-1.22.22Z" />
                    <path class="fill-white" d="M42.19,52.57v-5.59h3.94v.69h-3.14v4.2h3.26v.69h-4.05ZM42.91,50.07v-.68h2.87v.68h-2.87Z" />
                    <path class="fill-white" d="M8.36,11.98c0-.31-.01-.51-.04-.71h.79c-.03.18-.04.38-.04.71v2.09h1.92c.24,0,.38,0,.59-.04-.02.2-.03.37-.03.62v2.73c0,.33.01.57.04.81h-.73v-.38h-4.42c-.33,0-.56.02-.77.05v-.74c.22.03.4.04.74.04h4.46v-.95h-4.2c-.32,0-.51,0-.7.03v-.71c.17.03.36.04.71.04h4.19v-.85h-4.41c-.32,0-.5,0-.74.04v-.72c.22.03.43.04.76.04h1.88v-2.09ZM6.4,11.66c.54.7.84,1.16,1.16,1.83l-.62.36c-.35-.75-.64-1.22-1.15-1.85l.6-.34ZM11.61,11.94c-.44.92-.7,1.34-1.2,1.97l-.58-.36c.52-.62.78-1.08,1.13-1.92l.66.31Z" />
                    <path class="fill-white" d="M13.66,12.41c0-.29-.01-.53-.04-.78.24.03.48.04.83.04h3.53c.35,0,.57,0,.8-.04-.03.25-.04.47-.04.74v4.84c0,.38.02.61.04.86h-.76v-.47h-3.65v.47h-.76c.03-.25.04-.53.04-.86v-4.8ZM14.38,14.22h3.65v-1.89h-3.65v1.89ZM14.38,16.95h3.65v-2.08h-3.65v2.08Z" />
                    <path class="fill-white" d="M22.01,13.97c.41.32.62.51.9.83.26-.62.38-1.03.54-1.9h-1.22c-.35.88-.81,1.61-1.46,2.32-.14-.27-.2-.36-.43-.59.63-.65,1.11-1.46,1.44-2.42.1-.29.2-.73.23-.96l.74.14c-.07.16-.09.23-.15.43-.04.17-.08.29-.15.49h1.12c.29,0,.43,0,.6-.02-.03.15-.03.19-.06.39.17.42.45.87.81,1.29v-1.82c0-.35-.01-.56-.05-.83h.79c-.04.27-.05.47-.05.83v2.48c.54.44,1.15.8,1.78,1.05-.14.18-.26.41-.38.68-.55-.29-.97-.57-1.4-.9v1.73c0,.44.01.65.05.96h-.79c.04-.3.05-.55.05-.96v-2.35c-.43-.44-.68-.78-.95-1.26-.2,1-.54,1.89-1.02,2.61-.46.71-1.14,1.4-1.91,1.94-.15-.25-.3-.42-.51-.57.53-.33,1-.72,1.43-1.22.26-.3.44-.56.66-.93-.31-.37-.57-.62-.98-.92l.38-.51Z" />
                    <path class="fill-white" d="M30.8,12.03c0-.35-.02-.53-.05-.72h.81c-.04.22-.05.39-.05.72v1.75h1.76v-1.31c0-.23,0-.4-.03-.57h.77c-.03.22-.04.37-.04.62v1.49c0,.19,0,.32.02.44-.17-.02-.33-.02-.5-.02h-1.97v2.58h2.01v-1.32c0-.26,0-.45-.04-.64h.77c-.02.18-.04.4-.04.69v1.65c0,.33.02.51.05.71h-.74v-.41h-4.63v.41h-.74c.03-.2.04-.42.04-.71v-1.61c0-.29,0-.5-.04-.7h.77c-.03.17-.04.35-.04.65v1.28h1.92v-2.58h-1.82c-.18,0-.34,0-.52.02.02-.15.02-.3.02-.44v-1.49c0-.23-.01-.42-.04-.62h.77c-.02.15-.03.34-.03.58v1.3h1.62v-1.75Z" />
                    <path class="fill-white" d="M37.98,12.16c-.03.1-.04.13-.06.28-.11.88-.3,1.76-.51,2.42-.33,1.06-.79,1.88-1.47,2.66-.3-.29-.4-.37-.71-.54.45-.44.77-.89,1.08-1.55.33-.69.61-1.65.74-2.58.05-.33.07-.56.07-.83l.86.16ZM40.09,12c.02.42.15,1.1.33,1.76.36,1.36.88,2.34,1.68,3.19-.32.2-.42.29-.68.58-.41-.48-.67-.86-.99-1.5-.39-.77-.68-1.6-.87-2.54-.07-.29-.09-.41-.2-1.1-.02-.11-.03-.14-.05-.24l.77-.15ZM42.3,12.35c0,.48-.39.87-.87.87s-.86-.39-.86-.87.38-.87.86-.87.87.39.87.87ZM40.92,12.35c0,.28.23.51.5.51s.51-.23.51-.51-.23-.51-.51-.51-.5.23-.5.51Z" />
                    <path class="fill-white" d="M44.39,13.31c.32.55.46.9.74,1.73l-.71.23c-.19-.71-.36-1.16-.69-1.76l.66-.21ZM48.67,13.33c-.04.11-.05.14-.1.36-.22,1.02-.57,1.85-1.07,2.51-.53.71-1.18,1.22-2.21,1.73-.16-.27-.24-.37-.51-.62.52-.2.82-.37,1.25-.68.88-.64,1.39-1.42,1.72-2.62.11-.36.15-.62.15-.86l.77.17ZM45.97,13.01c.4.73.53,1.05.73,1.68l-.7.23c-.14-.56-.37-1.13-.68-1.71l.65-.2Z" />
                    <path class="fill-white" d="M53.87,11.59q-.06.08-.16.29c-.16.35-.21.47-.31.63.06,0,.17-.02.32-.02l1.79-.02c.28,0,.35-.01.48-.06l.42.41c-.08.1-.1.15-.17.41-.34,1.12-.88,2.12-1.52,2.87-.69.79-1.52,1.39-2.65,1.89-.17-.31-.26-.41-.53-.65,1.14-.47,1.89-.98,2.6-1.79.55-.64.99-1.46,1.28-2.39l-2.37.04c-.5.77-1.07,1.39-1.76,1.92-.2-.26-.29-.35-.61-.54.83-.56,1.38-1.17,1.92-2.13.25-.46.38-.77.42-1.04l.86.19Z" />
                  </g>
                </svg>
                <span class="js-tab-triangle opacity-0 invisible absolute -bottom-32 left-1/2 -translate-x-1/2 w-0 h-0 border-solid border-x-16 border-x-transparent border-b-28 border-b-pale-green border-t-0 duration-500"></span>
              </button>
            </div>

            <div class="mt-14 pc:mt-28">
              <div id="tab4" class="tab-cont2 bg-pale-pink pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">
                <div class="relative flex flex-col items-center gap-24 pc:gap-32">
                  <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div>
                        <div class="flex items-center gap-x-12 pc:gap-x-24">
                          <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                            <span class="text-8 pc:text-16 leading-none half-leading">基本価格</span>
                          </div>
                          <span class="text-17 pc:text-33 leading-none half-leading">¥37,400</span>
                        </div>
                      </div>
                    </div>
                    <div class="ml-38 pc:ml-64">
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥42,900</span>
                      </div>
                    </div>
                    <div class="max-md:w-full md:ml-80">
                      <p class="text-10 pc:text-25 max-md:text-center">所要時間：2時間</p>
                    </div>
                  </div>
                  <div class="w-full h-px bg-black"></div>
                  <div class="w-full pc:w-auto">
                    <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-24 pc:gap-x-80 gap-y-24">
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-32 pc:w-50">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/data.svg" alt="" class="w-full" width="79" height="79">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            カメラマンセレクト<br>
                            20カット
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-80 pc:w-120">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/kitukehair.svg" alt="" class="w-full" width="56" height="31">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            着付け/ヘア
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-82">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/satuei.svg" alt="" class="w-full" width="132" height="100">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            撮影
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-88">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/gaisyutu.svg" alt="" class="w-full" width="57" height="33">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            外出
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※お渡しデータは色調整・トリミング付き</p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※着付け/ヘアは本人分のみとなっております。</p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※振袖のお持ち込みは無料</p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">※10時前は早朝料金別途¥2,200</p>
                    </div>

                  </div>
                </div>
              </div>
              <div id="tab5" class="tab-cont2 hidden bg-pale-green pt-36 pc:pt-64 px-16 pc:px-72 pb-40 overflow-hidden">
                <div class="relative flex flex-col items-center gap-24 pc:gap-32">
                  <div class="flex justify-center items-center flex-wrap pc:flex-nowrap gap-y-12">
                    <div class="flex items-center gap-x-12 pc:gap-x-24">
                      <div>
                        <div class="flex items-center gap-x-12 pc:gap-x-24">
                          <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                            <span class="text-8 pc:text-16 leading-none half-leading">基本価格</span>
                          </div>
                          <span class="text-17 pc:text-33 leading-none half-leading">¥23,100</span>
                        </div>
                      </div>
                    </div>
                    <div class="ml-38 pc:ml-64">
                      <div class="flex items-center gap-x-12 pc:gap-x-24">
                        <div class="h-16 pc:h-30 px-8 pc:px-16 bg-white border border-black flex justify-center items-center">
                          <span class="text-8 pc:text-16 leading-none half-leading">土日祝</span>
                        </div>
                        <span class="text-17 pc:text-33 leading-none half-leading">¥28,600</span>
                      </div>
                    </div>
                    <div class="max-md:w-full md:ml-80">
                      <p class="text-10 pc:text-25 max-md:text-center">所要時間：1時間30分</p>
                    </div>
                  </div>
                  <div class="w-full h-px bg-black"></div>
                  <div class="w-full pc:w-auto">
                    <div class="flex justify-center flex-wrap pc:flex-nowrap gap-x-24 pc:gap-x-80 gap-y-24">
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-80 pc:w-120">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/kitukehair.svg" alt="" class="w-full" width="56" height="31">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            着付け/ヘア
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center flex-col gap-8">
                        <div class="h-62 pc:h-90 flex justify-center items-center">
                          <div class="w-56 pc:w-88">
                            <img src="/wp-content/themes/studio-tanaka_theme/assets/media/images/common/gaisyutu.svg" alt="" class="w-full" width="57" height="33">
                          </div>
                        </div>
                        <div class="h-21 pc:h-56 flex justify-center items-center">
                          <span class="text-8 pc:text-16 text-center leading-[1.3]">
                            外出
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-24 pc:mt-32">
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">
                        ※着付け/ヘアは本人分のみとなっております。
                      </p>
                      <p class="text-8 pc:text-16 -indent-[1em] pl-[1em] half-leading">
                        ※10時前は早朝料金別途¥2,200</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="mt-32 pc:mt-64">
              <div class="mx-auto md:w-full border border-border">
                <div class="bg-[#B0B0B0] h-35 pc:h-60 flex justify-center items-center">
                  <h3 class="text-12 pc:text-20 text-white">
                    オプション料金（販売価格）
                  </h3>
                </div>
                <div class="bg-white pt-16 pc:pt-24 pb-20 pc:pb-40 px-24 md:px-40 pc:px-160">
                  <ul class="flex flex-col pc:h-198 flex-wrap gap-x-80">
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        肌襦袢
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,320
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        裾よけ
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,430
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        足袋
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,650
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        髪飾り
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥1,100~
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        メイク
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥3,300
                      </span>
                    </li>
                    <li class="w-full pc:w-1/2 py-8 border-b border-border border-dashed flex justify-between items-center">
                      <span class="text-12 pc:text-20 leading-[1.3]">
                        ブーツレンタル
                      </span>
                      <span class="text-12 pc:text-20">
                        ¥5,500
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
      </section>

    </main>

    <?php get_template_part('inc', 'side-banner'); ?>
    <?php get_template_part('inc', 'footer'); ?>
    <?php get_template_part('inc', 'sp-menu'); ?>
  </div>
  <!-- l-wrap -->

  <script src="/wp-content/themes/studio-tanaka_theme/assets/js/common.js">
  </script>
  <script>
    const tabButtons = document.querySelectorAll('[data-tab]');
    const tabContents = document.querySelectorAll('.tab-cont');

    // タブボタンのクリックイベントを登録
    tabButtons.forEach(button => {
      button.addEventListener('click', (event) => {
        event.preventDefault(); // 不要なページ遷移を防ぐ

        // すべてのボタンから 'js-tab-active' クラスを削除
        tabButtons.forEach(btn => btn.classList.remove('js-tab-active'));

        // クリックされたボタンに 'js-tab-active' クラスを追加
        button.classList.add('js-tab-active');

        // すべてのタブコンテンツを非表示
        tabContents.forEach(content => {
          content.style.display = "none";
        });

        // クリックされたタブに対応するコンテンツを表示
        const tabId = button.getAttribute('data-tab');
        const targetTab = document.getElementById(tabId);
        if (targetTab) {
          targetTab.style.display = "block";
        }
      });
    });
  </script>
  <script>
    const tabButtons2 = document.querySelectorAll('[data-tab2]');
    const tabContents2 = document.querySelectorAll('.tab-cont2');

    // タブボタンのクリックイベントを登録
    tabButtons2.forEach(button => {
      button.addEventListener('click', (event) => {
        event.preventDefault(); // 不要なページ遷移を防ぐ

        // すべてのボタンから 'js-tab-active' クラスを削除
        tabButtons2.forEach(btn => btn.classList.remove('js-tab-active'));

        // クリックされたボタンに 'js-tab-active' クラスを追加
        button.classList.add('js-tab-active');

        // すべてのタブコンテンツを非表示
        tabContents2.forEach(content => {
          content.style.display = "none";
        });

        // クリックされたタブに対応するコンテンツを表示
        const tabId2 = button.getAttribute('data-tab2');
        const targetTab2 = document.getElementById(tabId2);
        if (targetTab2) {
          targetTab2.style.display = "block";
        }
      });
    });
  </script>

  <?php wp_footer(); ?>
</body>

</html>