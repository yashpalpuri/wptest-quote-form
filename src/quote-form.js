/**
 * Quote Form JS
 */

import './scss/main.scss' 

import XReactDom from 'react-dom'
import React from 'react'
import App from './app'

;( ( w, $ ) => {
  'use strict'

  const QF_Target = document.querySelectorAll( '.quote-form-container' );
  w.QF_Doms = []

  const Ready = () => {

    [...QF_Target].forEach( ( el ) => {
      XReactDom.render(
        <App />,
        el
      );

      QF_Doms.push( el )
    } )
  }

  $( Ready )

} )( window, jQuery )