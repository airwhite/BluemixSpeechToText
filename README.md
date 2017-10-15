# WatsonSpeechToText
IBM Watson Speech to Text PHP function
## 概要
以下に [IBM Watson Speech to Text](https://www.ibm.com/watson/jp-ja/developercloud/speech-to-text.html)　のホームページの概要を引用します。
>Speech to TextはWatsonの音声認識機能です。ディープ・ラーニングを活用し、音響的な特徴と言語知識から正確にテキストを書き起こします。クラウド上でAPIとして提供する音声認識システムであり、長い時間のストリーム音声や幅広い入力フォーマットをサポートしています。日本語のほかにもアメリカ英語やイギリス英語、フランス語、中国語など複数の言語に対応し、帯域制限された電話音声専用のモデルも提供します。Watsonは基本的な語彙をあらかじめ学習していますが、さらにカスタマイズ機能により特有の単語や言い回しを追加学習できます。そのため、クリアな音声が取得できればさまざまな使用環境で認識精度を高めることができます。世界的な記録を持つIBM Researchの研究成果に基づき、最新のアルゴリズムを順次導入します。
## 説明
- IBM Watson Speech to Text API は有償ですが一か月1000分までは無料で使えます。
- IBM Watson Speech to Text API を利用するためにはユーザ登録を行い、API用のユーザ名とパスワードが必要です。
# 動作確認
~~~
$ php sample.php
string(258) "{
   "results": [
      {
         "alternatives": [
            {
               "confidence": 0.912, 
               "transcript": "利用 規約 を 読み 下さい "
            }
         ], 
         "final": true
      }
   ], 
   "result_index": 0
}"
~~~
