<?PHP

class Controller
{
    const Url = 'Views';
    const ModelUrl = 'Model';

    public function view($path, array $data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $path = self::Url . '/' . str_replace('.', '/', $path) . '.php';
        return require($path);

    }

    public function loadModel($modelPath)
    {
        $path = (self::ModelUrl . '/' . $modelPath . '.php');
        return require($path);
    }
}
?>