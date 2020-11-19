## Introduction
BENviewer is a brand-new online gene interaction network visualization server based on graph embedding models. With mature graph embedding algorithms applied on several interaction network databases, it is able to provide human-friendly 2D visualization of more than 2000 biological pathways, and these results present not only genes involved but also tightness of interactions in an intuitive way. As a unique visualization server introducing graph embedding application for the first time, it's expected to help researchers gain deeper insights into biological networks beyond generating results explainable by existing knowledge. Additionally, operation-flow for users is simplified to greater extent in its current version, meanwhile URL optimization contributes to data acquisition in batch for further analysis. BENviewer is freely available at http://www.bmeonline.cn/BENviewer.
## Deployment
Build MySQL and import these data:
- [BEN.consensus](https://github.com/SKLB-lab/BENviewer/blob/data/BEN_consensus.sql.gz?raw=true)
- [BEN.reactome](https://github.com/SKLB-lab/BENviewer/blob/data/BEN_reactome.sql.gz?raw=true)
- [BEN.regnetworks](https://github.com/SKLB-lab/BENviewer/blob/data/BEN_regnetworks.sql.gz?raw=true)

Then run the following SHELL script:
```shell
git clone https://github.com/SKLB-lab/BENviewer.git
cd BENviewer
docker-compose -d up
```