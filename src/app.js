/**
 * Quote form component
 */

import React from 'react'
import { useForm } from 'react-hook-form'

const QuoteForm = () => {
  const { register, handleSubmit, errors, reset } = useForm()
  const onSubmit = data => {
    /**
     * Save !!!
     */
    alert( `Company Name: ${ data.companyname } / Phone Number: ${ data.phonenumber }` )
    reset()
  }

  return (
    <div className="quote-form-inner">
        <form className="form request-quote-form" onSubmit={ handleSubmit( onSubmit ) }>
          <label>
            <span className="__is-label">Company Name</span>
            <div className="field">
              <input 
                type="text" 
                name="companyname" 
                placeholder="..." 
                ref={ register( {
                  required: true,
                } ) }
              />
              { errors.companyname && <p style={ { color: 'red' } }>This field is required</p> }
            </div>
          </label>
          <label>
            <span class="__is-label">Phone Number</span>
            <div className="field">
              <input 
                type="text" 
                name="phonenumber" 
                placeholder="..." 
                ref={ register( {
                  required: true
                } ) }
              />
              { errors.phonenumber && <p style={ { color: 'red' } }>This field is required</p> }
            </div>
          </label>
          <div className="message-privacy-policy">The infomation collected will be used in accordance with our <a href="#">privacy policy</a>.</div>
          <input type="submit" className="button" value="Request a quote" />
        </form>
      </div>
  )
}

class App extends React.Component {

  constructor () {
    super( ...arguments )
  }


  render () {
    return <QuoteForm />
  }
}

export default App