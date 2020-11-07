# DevContainer with export-based Image

## ベースイメージを作る

カレントディレクトリを .devcontainer/base にする

イメージをビルド
```
docker build . -t base
```

コンテナを立ち上げ
```
docker run --name base base
```

コンテナをエクスポート
```
docker export base > ../workspace/base.tar
```

カレントディレクトリを .devcontainer/workspace にする
gzipで圧縮
```
gzip base.tar -c > base.tar.gz
```

## docker runで使えるかテスト
カレントディレクトリを .devcontainer/workspace にする

イメージをビルド
```
docker build . -t workspace
```

コンテナを立ち上げ
```
docker run -it --rm  workspace
```
