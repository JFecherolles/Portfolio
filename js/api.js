import { createClient } from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm'

const supabase = createClient('https://ingazqnwzecqgtknrpig.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImluZ2F6cW53emVjcWd0a25ycGlnIiwicm9sZSI6ImFub24iLCJpYXQiOjE2ODMyOTMyNzYsImV4cCI6MTk5ODg2OTI3Nn0.U7vLQ5_qRherG047YsETuo5kVACMDzsgYXu3HuwXom0')
// console.log(supabase)

async function Portfolio() {
  const { data, error } = await supabase
    .from('portfolio')
    .select('*')
  return data
}
// faire un compteur de vue
const array = [];
async function Portfoliovue(){
  const data = await Portfolio()
      .then(date => {
        date.map((item) => {
          array.push(item)
        })
        // console.log(array)
      })
      .catch(error => {
        console.log(error)
      })
       

    const { date, error } = await supabase
    .from('portfolio')
    .update({ vue: array[0].vue + 1 })
    .eq('id', 1)
    // console.log(array[0])
  } 
Portfoliovue()

//faire un compteur de vue pour le cv
const cvElement = document.getElementById('cvButton');
// console.log(cvElement)

cvElement.addEventListener('click', async () => {
  const { data, error } = await supabase
    .from('portfolio')
    .select('cv')
    .eq('id', 1);

  if (error) {
    console.log(error);
    return;
  }

  const newCount = data[0].cv + 1;
  const { data: newData, error: updateError } = await supabase
    .from('portfolio')
    .update({ cv: newCount })
    .eq('id', 1);

  if (updateError) {
    console.log(updateError);
    return;
  }

  // console.log('Le compteur de cv a été mis à jour avec succès !');
});
        



