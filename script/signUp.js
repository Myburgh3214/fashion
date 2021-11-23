const data = {'title': 'go study', 'completed': 'false'};
  fetch('https://jsonplaceholder.typicode.com/todos/1', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then(response => response.json())//translating the returned object to json
.then(data => {
  console.log('Success:', data);//logging a success message on success
})
.catch((error) => {
  console.error('Error:', error);//logging a success message in a promise catch
});
    
;
