import React from 'react';
import { useForm } from 'react-hook-form';

function ReactForm() {
  const { register, handleSubmit, errors } = useForm(); // initialize the hook
  const onSubmit = (data) => {
    alert(JSON.stringify(data));
  };

  return (
    <form className="module__form__content" onSubmit={handleSubmit(onSubmit)}>
    

		<h2>Request a quote</h2>
		<div className="module__form__group">
			<label for="company_name">COMPANY NAME</label>
			<input type="text" id="company_name" name="company_name" ref={register({ required: true })} />
      <p>{errors.company_name && 'company name is required.'}</p>
      
		</div>
		<div className="module__form__group">
			<label for="phone_number">PHONE NUMBER</label>
			<input type="text" id="phone_number" name="phone_number" ref={register({ required: true,pattern: /\d+/ })}/>
      <p>{errors.phone_number && 'Please enter number for phone number.'}</p>
		</div>
		<div className="module__form__group">
			<label></label>
			<small>The information collected will be used in accordance with our <a href="http://www.newscorpaustraliaprivacy.com/" target="_blank">privacy policy</a>.
			</small>
		</div>
		<div className="module__form__group">
			<label></label>
			<input type="submit" className="button" value="Request a quote" />
		</div>


  </form>
    
  );
}

export default ReactForm;