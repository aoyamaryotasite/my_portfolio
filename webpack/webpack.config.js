module.exports={
    //エントリーポイント
    entry:"./src/index.js",

    //ファイルの出力設定
    output:{
        //出力先のパスを決定
        path:`${__dirname}/dist`,
        //出力ファイル名
        filename:"bundle.js",
    },
    mode:"production",
    devServer:{
        static:"dist",
        open:true,
    },
}